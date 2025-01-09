<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $ARN
 * @property 'String'|'StringList'|'SecureString' $Type
 * @property string $KeyId
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedUser
 * @property string $Description
 * @property string $AllowedPattern
 * @property int $Version
 * @property 'Standard'|'Advanced'|'Intelligent-Tiering' $Tier
 * @property list<ParameterInlinePolicy> $Policies
 * @property string $DataType
 */
class ParameterMetadata extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     ARN?: string,
     *     Type?: 'String'|'StringList'|'SecureString',
     *     KeyId?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedUser?: string,
     *     Description?: string,
     *     AllowedPattern?: string,
     *     Version?: int,
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
