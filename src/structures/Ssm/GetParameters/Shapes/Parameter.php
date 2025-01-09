<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'String'|'StringList'|'SecureString' $Type
 * @property string $Value
 * @property int $Version
 * @property string $Selector
 * @property string $SourceResult
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $ARN
 * @property string $DataType
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: 'String'|'StringList'|'SecureString',
     *     Value?: string,
     *     Version?: int,
     *     Selector?: string,
     *     SourceResult?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     ARN?: string,
     *     DataType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
