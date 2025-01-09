<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeActivities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Username
 * @property string $EmailAddress
 * @property string $GivenName
 * @property string $Surname
 * @property string $OrganizationId
 * @property string $RootFolderId
 * @property string $RecycleBinFolderId
 * @property 'ACTIVE'|'INACTIVE'|'PENDING' $Status
 * @property 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER' $Type
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $ModifiedTimestamp
 * @property string $TimeZoneId
 * @property 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default' $Locale
 * @property UserStorageMetadata $Storage
 */
class User extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Username?: string,
     *     EmailAddress?: string,
     *     GivenName?: string,
     *     Surname?: string,
     *     OrganizationId?: string,
     *     RootFolderId?: string,
     *     RecycleBinFolderId?: string,
     *     Status?: 'ACTIVE'|'INACTIVE'|'PENDING',
     *     Type?: 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     TimeZoneId?: string,
     *     Locale?: 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default',
     *     Storage?: UserStorageMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
