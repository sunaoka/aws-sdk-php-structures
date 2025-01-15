<?php

namespace Sunaoka\Aws\Structures\Ssm\GetParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'String'|'StringList'|'SecureString'|null $Type
 * @property string|null $Value
 * @property int|null $Version
 * @property string|null $Selector
 * @property string|null $SourceResult
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $ARN
 * @property string|null $DataType
 */
class Parameter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: 'String'|'StringList'|'SecureString'|null,
     *     Value?: string|null,
     *     Version?: int|null,
     *     Selector?: string|null,
     *     SourceResult?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     ARN?: string|null,
     *     DataType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
