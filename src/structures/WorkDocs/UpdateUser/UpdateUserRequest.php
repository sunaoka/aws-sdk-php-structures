<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $UserId
 * @property string $GivenName
 * @property string $Surname
 * @property 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER' $Type
 * @property Shapes\StorageRuleType $StorageRule
 * @property string $TimeZoneId
 * @property 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default' $Locale
 * @property 'TRUE'|'FALSE' $GrantPoweruserPrivileges
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     UserId: string,
     *     GivenName?: string,
     *     Surname?: string,
     *     Type?: 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER',
     *     StorageRule?: Shapes\StorageRuleType,
     *     TimeZoneId?: string,
     *     Locale?: 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default',
     *     GrantPoweruserPrivileges?: 'TRUE'|'FALSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
