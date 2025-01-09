<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\CreateDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property 'KEY_ONLY'|'VALUE_ONLY'|'KEY_AND_VALUE' $Type
 */
class EC2TagFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     Type?: 'KEY_ONLY'|'VALUE_ONLY'|'KEY_AND_VALUE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
