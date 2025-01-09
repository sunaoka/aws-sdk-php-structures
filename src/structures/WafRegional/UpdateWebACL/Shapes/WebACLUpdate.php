<?php

namespace Sunaoka\Aws\Structures\WafRegional\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property ActivatedRule $ActivatedRule
 */
class WebACLUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     ActivatedRule: ActivatedRule
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
