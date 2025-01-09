<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeArn
 * @property string $TypeConfigurationAlias
 * @property string $TypeConfigurationArn
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 */
class TypeConfigurationIdentifier extends Shape
{
    /**
     * @param array{
     *     TypeArn?: string,
     *     TypeConfigurationAlias?: string,
     *     TypeConfigurationArn?: string,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK',
     *     TypeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
