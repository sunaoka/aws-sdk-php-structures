<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Alias
 * @property string|null $Configuration
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $TypeArn
 * @property string|null $TypeName
 * @property bool|null $IsDefaultConfiguration
 */
class TypeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Alias?: string|null,
     *     Configuration?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     TypeArn?: string|null,
     *     TypeName?: string|null,
     *     IsDefaultConfiguration?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
