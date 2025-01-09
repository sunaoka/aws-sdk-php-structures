<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRuleGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LABEL'|'NAMESPACE' $Scope
 * @property string $Key
 */
class LabelMatchStatement extends Shape
{
    /**
     * @param array{
     *     Scope: 'LABEL'|'NAMESPACE',
     *     Key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
