<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CompareDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SourceOnly
 * @property list<string>|null $TargetOnly
 * @property list<DivergentItem>|null $Diverged
 */
class DiffItems extends Shape
{
    /**
     * @param array{
     *     SourceOnly?: list<string>|null,
     *     TargetOnly?: list<string>|null,
     *     Diverged?: list<DivergentItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
