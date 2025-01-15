<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateIPSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IPSetId
 * @property string|null $Name
 * @property list<IPSetDescriptor> $IPSetDescriptors
 */
class IPSet extends Shape
{
    /**
     * @param array{
     *     IPSetId: string,
     *     Name?: string|null,
     *     IPSetDescriptors: list<IPSetDescriptor>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
