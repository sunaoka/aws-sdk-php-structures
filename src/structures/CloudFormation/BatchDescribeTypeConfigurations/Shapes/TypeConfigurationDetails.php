<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Alias
 * @property string $Configuration
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $TypeArn
 * @property string $TypeName
 * @property bool $IsDefaultConfiguration
 */
class TypeConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Alias?: string,
     *     Configuration?: string,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     TypeArn?: string,
     *     TypeName?: string,
     *     IsDefaultConfiguration?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
