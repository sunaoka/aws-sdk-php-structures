<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<DivergentField>|null $Fields
 */
class DivergentItem extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Fields?: list<DivergentField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
