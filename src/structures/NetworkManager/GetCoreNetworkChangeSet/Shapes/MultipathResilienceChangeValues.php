<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'best-effort'|'disabled'|null $Mode
 * @property list<list<string>>|null $EdgeSets
 */
class MultipathResilienceChangeValues extends Shape
{
    /**
     * @param array{
     *     Mode?: 'best-effort'|'disabled'|null,
     *     EdgeSets?: list<list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
