<?php

namespace Sunaoka\Aws\Structures\CloudFormation\BatchDescribeTypeConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TypeArn
 * @property string|null $TypeConfigurationAlias
 * @property string|null $TypeConfigurationArn
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 */
class TypeConfigurationIdentifier extends Shape
{
    /**
     * @param array{
     *     TypeArn?: string|null,
     *     TypeConfigurationAlias?: string|null,
     *     TypeConfigurationArn?: string|null,
     *     Type?: 'RESOURCE'|'MODULE'|'HOOK'|null,
     *     TypeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
