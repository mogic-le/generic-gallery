<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "genericgallery"
 *
 * Auto generated by Extension Builder 2014-09-14
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Generic Gallery',
    'description' => 'One gallery to rule them all. Extbase & Fluid driven for use with any gallery / slide / rotate plugin.',
    'category' => 'plugin',
    'author' => 'Felix Nagel',
    'author_email' => 'info@felixnagel.com',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '6.0.0',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.2.99',
            'typo3' => '12.0.0-12.4.99',
        ],
        'suggests' => [
            'filemetadata' => '',
            'metadata' => '',
            'extractor' => '',
        ],
    ],
];
