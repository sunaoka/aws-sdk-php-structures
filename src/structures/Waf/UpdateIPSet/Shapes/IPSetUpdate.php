<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateIPSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSERT'|'DELETE' $Action
 * @property IPSetDescriptor $IPSetDescriptor
 */
class IPSetUpdate extends Shape
{
    /**
     * @param array{
     *     Action: 'INSERT'|'DELETE',
     *     IPSetDescriptor: IPSetDescriptor
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
