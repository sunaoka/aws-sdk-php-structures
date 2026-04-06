<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property list<AttributeType>|null $Attributes
 * @property \Aws\Api\DateTimeResult|null $UserCreateDate
 * @property \Aws\Api\DateTimeResult|null $UserLastModifiedDate
 * @property bool|null $Enabled
 * @property 'UNCONFIRMED'|'CONFIRMED'|'ARCHIVED'|'COMPROMISED'|'UNKNOWN'|'RESET_REQUIRED'|'FORCE_CHANGE_PASSWORD'|'EXTERNAL_PROVIDER'|null $UserStatus
 * @property list<MFAOptionType>|null $MFAOptions
 */
class UserType extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Attributes?: list<AttributeType>|null,
     *     UserCreateDate?: \Aws\Api\DateTimeResult|null,
     *     UserLastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     Enabled?: bool|null,
     *     UserStatus?: 'UNCONFIRMED'|'CONFIRMED'|'ARCHIVED'|'COMPROMISED'|'UNKNOWN'|'RESET_REQUIRED'|'FORCE_CHANGE_PASSWORD'|'EXTERNAL_PROVIDER'|null,
     *     MFAOptions?: list<MFAOptionType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
