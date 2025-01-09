<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameterHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'String'|'StringList'|'SecureString' $Type
 * @property string $KeyId
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedUser
 * @property string $Description
 * @property string $Value
 * @property string $AllowedPattern
 * @property int $Version
 * @property list<string> $Labels
 * @property 'Standard'|'Advanced'|'Intelligent-Tiering' $Tier
 * @property list<ParameterInlinePolicy> $Policies
 * @property string $DataType
 */
class ParameterHistory extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: 'String'|'StringList'|'SecureString',
     *     KeyId?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedUser?: string,
     *     Description?: string,
     *     Value?: string,
     *     AllowedPattern?: string,
     *     Version?: int,
     *     Labels?: list<string>,
     *     Tier?: 'Standard'|'Advanced'|'Intelligent-Tiering',
     *     Policies?: list<ParameterInlinePolicy>,
     *     DataType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
