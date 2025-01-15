<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $EdgeLocations
 * @property list<string>|null $SharedSegments
 */
class CoreNetworkSegment extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     EdgeLocations?: list<string>|null,
     *     SharedSegments?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
