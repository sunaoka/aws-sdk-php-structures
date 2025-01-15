<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\GetDeploymentGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property 'KEY_ONLY'|'VALUE_ONLY'|'KEY_AND_VALUE'|null $Type
 */
class TagFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     Type?: 'KEY_ONLY'|'VALUE_ONLY'|'KEY_AND_VALUE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
