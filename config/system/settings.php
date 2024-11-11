<?php
return [
    'BE' => [
        'debug' => false,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$UFNVbjd2R0RkWU4zZ2FvUQ$N6hl+oHi0btOTjRtJT8mkKIjCnzvOuUCb/4KGJ8a5ko',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'db',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'db',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
            'loginLogoAlt' => '',
        ],
        'brofix' => [
            'combinedErrorNonCheckableMatch' => 'regex:/^(httpStatusCode:(401|403):|libcurlErrno:60:SSL certificate problem: unable to get local issuer certificate)/',
            'excludeSoftrefs' => 'url',
            'excludeSoftrefsInFields' => 'tt_content.bodytext',
            'linkTargetCacheExpiresHigh' => '0',
            'linkTargetCacheExpiresLow' => '0',
            'overrideFormDataGroup' => '',
            'showEditButtons' => 'both',
            'showPageCalloutBrokenLinksExist' => '1',
            'showPageLayoutButton' => '1',
            'showalllinks' => '1',
            'tcaProcessing' => 'default',
            'traverseMaxNumberOfPagesInBackend' => '1000',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'femanager' => [
            'disableLog' => '0',
            'disableModule' => '0',
            'enableConfirmationModule' => '0',
            'overrideFeUserCountryFieldWithSelect' => '0',
        ],
        'ig_slug' => [
            'disableOwnMenuItem' => '0',
        ],
        'ke_search' => [
            'additionalWordCharacters' => '',
            'allowEmptySearch' => '1',
            'enableExplicitAnd' => '0',
            'enablePartSearch' => '1',
            'finishNotification' => '0',
            'loglevel' => 'ERROR',
            'multiplyValueToTitle' => '1',
            'notificationRecipient' => '',
            'notificationSender' => 'no_reply@domain.com',
            'notificationSubject' => '[KE_SEARCH INDEXER NOTIFICATION]',
            'pathCatdoc' => '/usr/bin/',
            'pathPdfinfo' => '/usr/bin/',
            'pathPdftotext' => '/usr/bin/',
            'searchWordLength' => '4',
        ],
        'mask' => [
            'backend' => '',
            'backend_layouts_folder' => '',
            'backendlayout_pids' => '0',
            'content' => '',
            'content_elements_folder' => '',
            'json' => '',
            'layouts' => '',
            'layouts_backend' => '',
            'loader_identifier' => '',
            'override_shared_fields' => '0',
            'partials' => '',
            'partials_backend' => '',
            'preview' => '',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => '',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'slugBehaviour' => 'unique',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'powermail' => [
            'disableIpLog' => '1',
            'disableMarketingInformation' => '0',
            'disablePluginInformation' => '0',
            'disablePluginInformationMailPreview' => '0',
            'enableCaching' => '0',
            'replaceIrreWithElementBrowser' => '0',
        ],
        'vhs' => [
            'disableAssetHandling' => '0',
        ],
    ],
    'FE' => [
        'cacheHash' => [
            'enforceValidation' => true,
        ],
        'debug' => false,
        'disableNoCacheParameter' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '6c441e7afd5d214e2e068a2da3c7abaeaaed0148317e2518a5730d850828c15b0d10be6f34cefcdeeab6b55a22ea7f64',
        'exceptionalErrors' => 4096,
        'features' => [
            'security.backend.enforceContentSecurityPolicy' => true,
            'security.usePasswordPolicyForFrontendUsers' => true,
        ],
        'sitename' => 'New TYPO3 Project',
        'systemMaintainers' => [
            1,
        ],
    ],
];
