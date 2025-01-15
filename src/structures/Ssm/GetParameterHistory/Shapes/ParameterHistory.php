<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'String'|'StringList'|'SecureString'|null $Type
 * @property string|null $KeyId
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedUser
 * @property string|null $Description
 * @property string|null $Value
 * @property string|null $AllowedPattern
 * @property int|null $Version
 * @property list<string>|null $Labels
 * @property 'Standard'|'Advanced'|'Intelligent-Tiering'|null $Tier
 * @property list<ParameterInlinePolicy>|null $Policies
 * @property string|null $DataType
 */
class ParameterHistory extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: 'String'|'StringList'|'SecureString'|null,
     *     KeyId?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedUser?: string|null,
     *     Description?: string|null,
     *     Value?: string|null,
     *     AllowedPattern?: string|null,
     *     Version?: int|null,
     *     Labels?: list<string>|null,
     *     Tier?: 'Standard'|'Advanced'|'Intelligent-Tiering'|null,
     *     Policies?: list<ParameterInlinePolicy>|null,
     *     DataType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
