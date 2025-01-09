<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateCoreNetwork\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $EdgeLocations
 * @property list<string> $SharedSegments
 */
class CoreNetworkSegment extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     EdgeLocations?: list<string>,
     *     SharedSegments?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
