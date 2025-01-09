<?php

namespace Sunaoka\Aws\Structures\Waf\GetIPSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IPSetId
 * @property string $Name
 * @property list<IPSetDescriptor> $IPSetDescriptors
 */
class IPSet extends Shape
{
    /**
     * @param array{
     *     IPSetId: string,
     *     Name?: string,
     *     IPSetDescriptors: list<IPSetDescriptor>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
