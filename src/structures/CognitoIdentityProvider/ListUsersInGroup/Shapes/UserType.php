<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUsersInGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Username
 * @property list<AttributeType> $Attributes
 * @property \Aws\Api\DateTimeResult $UserCreateDate
 * @property \Aws\Api\DateTimeResult $UserLastModifiedDate
 * @property bool $Enabled
 * @property 'UNCONFIRMED'|'CONFIRMED'|'ARCHIVED'|'COMPROMISED'|'UNKNOWN'|'RESET_REQUIRED'|'FORCE_CHANGE_PASSWORD'|'EXTERNAL_PROVIDER' $UserStatus
 * @property list<MFAOptionType> $MFAOptions
 */
class UserType extends Shape
{
    /**
     * @param array{
     *     Username?: string,
     *     Attributes?: list<AttributeType>,
     *     UserCreateDate?: \Aws\Api\DateTimeResult,
     *     UserLastModifiedDate?: \Aws\Api\DateTimeResult,
     *     Enabled?: bool,
     *     UserStatus?: 'UNCONFIRMED'|'CONFIRMED'|'ARCHIVED'|'COMPROMISED'|'UNKNOWN'|'RESET_REQUIRED'|'FORCE_CHANGE_PASSWORD'|'EXTERNAL_PROVIDER',
     *     MFAOptions?: list<MFAOptionType>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
