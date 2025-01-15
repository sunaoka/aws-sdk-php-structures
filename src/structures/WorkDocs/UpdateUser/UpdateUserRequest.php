<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $UserId
 * @property string|null $GivenName
 * @property string|null $Surname
 * @property 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER'|null $Type
 * @property Shapes\StorageRuleType|null $StorageRule
 * @property string|null $TimeZoneId
 * @property 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default'|null $Locale
 * @property 'TRUE'|'FALSE'|null $GrantPoweruserPrivileges
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     UserId: string,
     *     GivenName?: string|null,
     *     Surname?: string|null,
     *     Type?: 'USER'|'ADMIN'|'POWERUSER'|'MINIMALUSER'|'WORKSPACESUSER'|null,
     *     StorageRule?: Shapes\StorageRuleType|null,
     *     TimeZoneId?: string|null,
     *     Locale?: 'en'|'fr'|'ko'|'de'|'es'|'ja'|'ru'|'zh_CN'|'zh_TW'|'pt_BR'|'default'|null,
     *     GrantPoweruserPrivileges?: 'TRUE'|'FALSE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
