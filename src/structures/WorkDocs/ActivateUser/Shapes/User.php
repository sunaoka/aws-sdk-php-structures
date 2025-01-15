<?php

namespace Sunaoka\Aws\Structures\WorkDocs\ActivateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Username
 * @property string|null $EmailAddress
 * @property string|null $GivenName
 * @property string|null $Surname
 * @property string|null $OrganizationId
 * @property string|null $RootFolderId
 * @property string|null $RecycleBinFolderId
 * @property 'ACTIVE'|'INACTIVE'|'PENDING'|null $Status
 * @property 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER'|null $Type
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ModifiedTimestamp
 * @property string|null $TimeZoneId
 * @property 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default'|null $Locale
 * @property UserStorageMetadata|null $Storage
 */
class User extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Username?: string|null,
     *     EmailAddress?: string|null,
     *     GivenName?: string|null,
     *     Surname?: string|null,
     *     OrganizationId?: string|null,
     *     RootFolderId?: string|null,
     *     RecycleBinFolderId?: string|null,
     *     Status?: 'ACTIVE'|'INACTIVE'|'PENDING'|null,
     *     Type?: 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TimeZoneId?: string|null,
     *     Locale?: 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default'|null,
     *     Storage?: UserStorageMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
