
#!/usr/bin/env php
<?php
$snippets = array(
	'_v'                    => '<?php  if (!defined(\'_VALID_BBC\')) exit(\'No direct script access allowed\');

',

	'FormCheckbox'          => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'checkbox\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setCaption(\'${5:Apakah anda ingin mencentang}\');',

	'FormColor'             => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'color\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');',

	'FormCondition'         => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'condition\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->addDefault( \'bukan angka 5 atau di bawahnya\' );
#\$${1:form}->${2:roll}->input->${3:fieldName}->addCondition( \'=\', \'5\', \'pada #_id_# berisi angka 5\' );
#\$${1:form}->${2:roll}->input->${3:fieldName}->addCondition( \'>\', 5, \'isi nya #_value_# pada #_id_# yang berisi lebih dari lima\' );',

	'FormDate'              => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'date\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setDefaultValue(\'now\');',

	'FormDateinterval'      => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'dateinterval\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${5:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setEndDateField(\'${4:fieldName2}\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setPlaintext(true);
\$${1:form}->${2:edit}->input->${3:fieldName}->setDefaultValue(\'now\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setCaption(\'${6:Start Date}\');
\$${1:form}->${2:edit}->input->${4:fieldName2}->setTitle(\'${7:End Date}\');',

	'FormDatetime'          => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'datetime\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setDateFormat(\'Y-m-d H:i:s\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setDefaultValue(\'now\');',

	'FormDependentdropdown' => '\$${1:form}->${2:edit}->addInput(\'${3:NAMABEBAS}\', \'dependentdropdown\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTitle(\'${4:Location}\');

// MEMBUAT SELECTION DENGAN NAMA FIELD fieldName1 YANG BUKAN TURUNAN DARI SELECTION LAIN
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addInput(\'${5:fieldName1}\', \'${7:bbc_country}\', \'\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTable(\'${5:fieldName1}\', \'name\', \'id\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addOption(\'${5:fieldName1}\', \'--Select Country--\', \'\');

// MEMBUAT SELECTION DENGAN NAMA FIELD fieldName2 TURUNAN DARI fieldName1
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addInput(\'${6:fieldName2}\', \'${8:bbc_country_state}\', \'${5:fieldName1}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTable(\'${6:fieldNjame2}\', \'name\', \'id\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addOption(\'${6:fieldName2}\', \'--Select State--\', \'\');
',

	'FormEditlinks'         => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'editlinks\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:\'Judul_Kolom\'}\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setCaption(\'${5:Label_Link}\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setModal();
#\$${1:form}->${2:roll}->input->${3:fieldName}->setGetName( \'id\' );
\$${1:form}->${2:roll}->input->${3:fieldName}->setFieldName( \'id AS ${3:fieldName}\' );
\$${1:form}->${2:roll}->input->${3:fieldName}->setLinks(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_link1\', \'label1\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setLinks(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_link2\', \'label2\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setLinks(array(
#  \$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_link1\' => \'label1\',
#  \$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_link2\' => \'label2\',
#  \$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_link3\' => \'label3\'
#  ));',

	'FormFile'              => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'file\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Image}\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setFolder(\$Bbc->mod[\'dir\']);
#\$${1:form}->${2:edit}->input->${3:fieldName}->setAllowedExtension(array(\'jpg\', \'jpeg\', \'gif\', \'png\', \'bmp\'));
#\$${1:form}->${2:edit}->input->${3:fieldName}->setResize(1080);
#\$${1:form}->${2:edit}->input->${3:fieldName}->setThumbnail(120, \$prefix = \'thumb\', \$is_dir = true);
#\$${1:form}->${2:edit}->input->${3:fieldName}->setWatermark(\$image_path, \$param_in_image_lib = array());
#\$${1:form}->${2:edit}->input->${3:fieldName}->setImageHover();
#\$${1:form}->${2:edit}->input->${3:fieldName}->setImageClick();',

	'FormHeader'            => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'header\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:text header dari form}\');',

	'FormHidden'            => '\$${1:form}->${2:add}->addInput(\'${3:fieldName}\', \'hidden\');
\$${1:form}->${2:add}->input->${3:fieldName}->setDefaultValue(\$${4:the_value});',

	'FormKeyword'           => '\$${1:form}->${2:search}->addInput(\'${3:fieldName}\', \'keyword\');
\$${1:form}->${2:search}->input->${3:fieldName}->addSearchField(\'${4:title,description,keyword,tags,intro,content}\', ${5:isFullText});',

	'FormMulticheckbox'     => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'multicheckbox\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Reference Checkbox}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceTable(\'${5:bbc_content_cat_text}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceField(\'${6:title}\', \'${7:cat_id}\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceCondition(\'lang_id=\'.lang_id());
#\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceNested(\'par_id\');',

	'FormMultifile'         => '\$${1:form}->${2:edit}->addInput(\'${3:images}\', \'multifile\');
#\$${1:form}->${2:edit}->input->${3:images}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:images}->setFolder(\$Bbc->mod[\'dir\'].\$${5:id}.\'/\');
#\$${1:form}->${2:edit}->input->${3:images}->setResize(1920);
#\$${1:form}->${2:edit}->input->${3:images}->setThumbnail(250, \$prefix = \'thumb\');
#\$${1:form}->${2:edit}->input->${3:images}->setWatermark(\$watermark_path, \'center\');
#\$${1:form}->${2:edit}->input->${3:images}->setFirstField(\'image\');',

	'FormMultiform'         => '\$${1:form}->${2:edit}->addInput(\'${3:NAMABEBAS}\', \'multiform\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTitle(\'${4:JUDUL INPUT}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceTable(\'${5:table_reference}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceField(\'${6:reference_id}\', \'${7:table_id}\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceCondition( \'active=1\' );
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setToogle(false);
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addInput(\'${8:fieldName1}\', \'${9:text}\', \'${10:PLACEHOLDER_1}\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addInput(\'fieldName2\', \'INPUT_TYPE_2\', \'PLACEHOLDER_2\');',

	'FormMultiid'           => '\$${1:form}->${2:edit}->addInput(\'${3:related}\', \'multiid\');
#\$${1:form}->${2:edit}->input->${3:related}->setTitle(\'${4:Related Content}\');
\$${1:form}->${2:edit}->input->${3:related}->setReferenceTable(\'${5:bbc_content_text}\');
\$${1:form}->${2:edit}->input->${3:related}->setReferenceField(\'${6:title}\',\'${7:content_id}\');
#\$${1:form}->${2:edit}->input->${3:related}->setReferenceCondition(\'lang_id=\'.lang_id());',

	'FormMultiinput'        => '\$${1:form}->${2:edit}->addInput(\'${3:NAMABEBAS}\', \'multiinput\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTitle(\'${4:JUDUL INPUT}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setToogle(false);
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addInput(\'${5:fieldName1}\', \'${6:text}\', \'${7:PLACEHOLDER_1}\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->addInput(\'fieldName2\', \'INPUT_TYPE_2\', \'PLACEHOLDER_2\');',

	'FormMultiselect'       => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName/NAMABEBAS}\', \'multiselect\');
\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setTitle(\'${4:Reference Selection}\');
\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setReferenceTable(\'${5:bbc_content_cat_text}\');
\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setReferenceField(\'${6:title}\',\'${7:cat_id}\');
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setReferenceCondition(\'lang_id=\'.lang_id());
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setReferenceNested(\'par_id\');
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setRelationTable(\'bbc_content_category\');
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setRelationTableId(\'category_id\');
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setRelationField(\'content_id\',\'cat_id\');
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setRelationCondition(\'pruned=0\');
#\$${1:form}->${2:edit}->input->${3:fieldName/NAMABEBAS}->setRelationCondition(\'active=1\');',

	'FormOrderby'           => '\$${1:form}->${2:roll}->addInput(\'${3:orderby}\', \'orderby\');
\$${1:form}->${2:roll}->input->${3:orderby}->setTitle(\'${4:Ordered}\');',

	'FormParams'            => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'params\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setParams(\$${5:fields});
#\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceTable(\'bbc_user_field\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceCondition(\'group_id=0\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setReferenceCondition(\'active=1\');
#\$${1:form}->${2:edit}->input->${3:fieldName}->setEncode(true);',

	'FormPassword'          => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'password\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setDefault(\'${5:123456}\');',

	'FormPasswordconfirm'   => '\$${1:form}->${2:edit}->addInput(\'${3:fieldName}\', \'passwordConfirm\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setAlert(\'Maaf, password yang anda masukkan tidak sama\');
\$${1:form}->${2:edit}->input->${3:fieldName}->setSubTitle(\'Masukkan password\', \'Masukkan kembali password untuk validasi\');',

	'FormPlaintext'         => '\$${1:form}->${2:edit}->addInput(\'${3:NAMABEBAS}\', \'plaintext\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTitle(\'${4:Judul Input}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setValue(\'${5:Text yang akan dimunculkan}\');',

	'FormRadio'             => '\$${1:form}->${2:edit}->addInput(\'${3:gender}\', \'radio\');
\$${1:form}->${2:edit}->input->${3:gender}->setTitle(\'${4:Pilih Gender}\');
\$${1:form}->${2:edit}->input->${3:gender}->addRadio(\'${5:Pria}\', 1);
\$${1:form}->${2:edit}->input->${3:gender}->addRadio(\'${6:Wanita}\', 0);
#\$${1:form}->${2:edit}->input->${3:gender}->setPlaintext(true);',

	'FormSelect'            => '\$${1:form}->${2:edit}->addInput(\'${3:fieldname}\', \'select\');
\$${1:form}->${2:edit}->input->${3:fieldname}->setTitle(\'${4:Judul Field}\');
\$${1:form}->${2:edit}->input->${3:fieldname}->addOption(${5:array(\'nol\', \'satu\', \'dua\', \'tiga\')});',

	'FormSelecttable'       => '\$${1:form}->${2:edit}->addInput(\'${3:film_id}\', \'selecttable\');
\$${1:form}->${2:edit}->input->${3:film_id}->setTitle(\'${4:Film yang ditayangkan}\');
\$${1:form}->${2:edit}->input->${3:film_id}->setReferenceTable(\'${5:filmes ORDER BY title}\');
\$${1:form}->${2:edit}->input->${3:film_id}->setReferenceField( \'${6:title}\', \'${7:id}\' );
#\$${1:form}->${2:edit}->input->${3:film_id}->setReferenceCondition( \'active=1\' );
#\$${1:form}->${2:edit}->input->${3:film_id}->setReferenceNested( \'par_id\' );
#\$${1:form}->${2:edit}->input->${3:film_id}->setAllowNew(\$bool_or_str, \$add_query = array());
#\$${1:form}->${2:edit}->input->${3:film_id}->setLinks(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_detail\');
#\$${1:form}->${2:edit}->input->${3:film_id}->setDB(\'db1\');',

	'FormSql'               => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'sql\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:Judul Field}\');
\$${1:form}->${2:roll}->input->${3:fieldName}->addSqlQuery("SELECT `fieldName2` FROM `other_table` WHERE `main_table_id`=\'${3:fieldName}\'");
\$${1:form}->${2:roll}->input->${3:fieldName}->setDelimiter(\', \');',

	'FormSqllinks'          => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'sqllinks\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:Judul Field}\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setLinks(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_${5:edit}\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setGetName(\'id\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setFieldName(\'anyfield AS fieldName\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setModal();
#\$${1:form}->${2:roll}->input->${3:fieldName}->setUrlPop(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_${5:edit}\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setSizePop(640, 480);',

	'FormSqlplaintext'      => '\$${1:form}->${2:edit}->addInput(\'${3:title}\', \'sqlplaintext\');
\$${1:form}->${2:edit}->input->${3:title}->setTitle(\'${4:Title}\');
#\$${1:form}->${2:edit}->input->${3:title}->setExtra(array(\'<div class="myClass">\', \'</div>\'));',

	'FormTags'              => '\$${1:form}->${2:edit}->addInput(\'${3:NAMABEBAS}\', \'tags\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setTitle(\'${4:Content Tags}\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setLinks(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_${5:tag}&id=\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setAllowNew(true);
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setURL(\$Bbc->mod[\'circuit\'].\'.\'.\$Bbc->mod[\'task\'].\'_${6:tagfetcher}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceTable(\'${7:bbc_content_tag}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceField(\'${8:title}\', \'${9:id}\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceCount(true||\'total_fieldname\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setReferenceCondition(\'lang_id=\'.lang_id());
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setRelationTable(\'${10:bbc_content_tag_list}\');
\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setRelationField(\'${11:content_id}\', \'${12:tag_id}\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setRelationTableId(\'list_id\');
#\$${1:form}->${2:edit}->input->${3:NAMABEBAS}->setDB(\'db1\');',

	'FormText'              => '\$${1:form}->${2:edit}->addInput(\'${3:title}\', \'text\');
\$${1:form}->${2:edit}->input->${3:title}->setTitle(\'${4:Title}\');
#\$${1:form}->${2:edit}->input->${3:title}->setLanguage();
\$${1:form}->${2:edit}->input->${3:title}->setRequire(\'${5:any|email|url|phone|money|number}\', ${6:is_mandatory});',

	'FormTextarea'          => '\$${1:form}->${2:edit}->addInput(\'${3:description}\', \'textarea\');
\$${1:form}->${2:edit}->input->${3:description}->setTitle(\'${4:Judul Input}\');
#\$${1:form}->${2:edit}->input->${3:description}->setLanguage();
#\$${1:form}->${2:edit}->input->${3:description}->setHtmlEditor();
#\$${1:form}->${2:edit}->input->${3:description}->setToolbar(\'basic\');',

	'FormTexttip'           => '\$${1:form}->${2:roll}->addInput(\'${3:fieldName}\', \'texttip\');
\$${1:form}->${2:roll}->input->${3:fieldName}->setTitle(\'${4:Judul Input}\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setCaption(\'Judul Tooltip {fieldName2}\');
#\$${1:form}->${2:roll}->input->${3:fieldName}->setNumberFormat();
#\$${1:form}->${2:roll}->input->${3:fieldName}->setTemplate(\'
#<table>
#  <tbody>
#    <tr>
#      <td>TEXT_BEBAS1</td>
#      <td>: {fieldName3}</td>
#    </tr>
#    <tr>
#      <td>TEXT_BEBAS2</td>
#      <td>: {fieldName4}</td>
#    </tr>
#  </tbody>
#</table>
#\');
#\$${1:form}->${2:roll}->input->fieldName2->setNumberFormat();
#\$${1:form}->${2:roll}->input->fieldName3->setNumberFormat();
#\$${1:form}->${2:roll}->input->fieldName4->setNumberFormat();',


	'peae'                  => '\$${5:form} = _lib(\'pea\',  \'${1:table_name}\');
\$${5:form}->initEdit(!empty(\$${2:id}) ? \'WHERE id=\'.\$${2:id} : \'\');${6:
\$${5:form}->edit->setLanguage();
}
\$${5:form}->edit->addInput(\'header\',\'header\');
\$${5:form}->edit->input->header->setTitle(!empty(\$${2:id}) ? \'${3:Edit Data}\' : \'${4:Add Data}\');

\$${5:form}->edit->addInput(\'${8:title}\',\'text\');
\$${5:form}->edit->input->${8:title}->setTitle(\'${9:Title}\');${7:
\$${5:form}->edit->input->${8:title}->setLanguage();
}
${10:\$${5:form}->edit->action();
}echo \$${5:form}->edit->getForm();',

	'pear'                  => '\$${3:form} = _lib(\'pea\',  \'${1:table_name}\');
\$${3:form}->initRoll("${2:WHERE 1 ORDER BY id DESC}");${4:

\$${3:form}->roll->setLanguage();}${9:
\$${3:form}->roll->setSaveTool(${10:true});

}\$${3:form}->roll->addInput(\'${6:title}\',\'sqlplaintext\');
\$${3:form}->roll->input->${6:title}->setTitle(\'${7:Title}\');${5:
\$${3:form}->roll->input->${6:title}->setLanguage();
}
${8:\$${3:form}->roll->action();
}echo \$${3:form}->roll->getForm();',

	'peas'                  => '\$${4:form} = _lib(\'pea\',  \'${1:table_name}\');
\$${4:form}->initSearch();

\$${4:form}->search->addInput(\'keyword\',\'keyword\');
\$${4:form}->search->input->keyword->addSearchField(\'${2:field_names_with_comma}\', ${3:isFullText});

\$${5:add_sql} = \$${4:form}->search->action();
\$${6:keyword} = \$${4:form}->search->keyword();

echo \$${4:form}->search->getForm();',
	);

if ($dir = @opendir(__DIR__)) {
	while (($file = readdir($dir)) !== false)
	{
		if($file != '.' and $file != '..')
		{
			if (preg_match('~\.sublime\-snippet$~is', $file))
			{
				echo "removing ".$file."...\n";
				unlink(__DIR__.'/'.$file);
			}
		}
	}
	closedir($dir);
}
$template = '<snippet>
	<content><![CDATA[
%s
]]></content>
	<!-- Optional: Set a tabTrigger to define how to trigger the snippet -->
	<tabTrigger>%s</tabTrigger>
	<!-- Optional: Set a scope to limit where the snippet will trigger -->
	<scope>source.php</scope>
</snippet>';
foreach ($snippets as $key => $snippet)
{
	$trigger  = strtolower(preg_replace('~^form~is', 'fm', $key));
	$filename = __DIR__.'/'.$trigger.'.sublime-snippet';
	echo "create '{$trigger}'...\n";
	if ($trigger=='_v')
	{
		$code = str_replace('<scope>source.php</scope>', '<!-- <scope>source.python</scope> -->', $template);
	}else{
		$code = $template;
	}
	file_put_contents($filename, sprintf($code, $snippet, $trigger));
}
$file = __DIR__.'/PHP.sublime-completions';
$url  = 'http://www.dev.esoftplay.com/tools/manual-snippets?file='.urlencode($file).'&is_ajax=1';
echo file_get_contents($url);