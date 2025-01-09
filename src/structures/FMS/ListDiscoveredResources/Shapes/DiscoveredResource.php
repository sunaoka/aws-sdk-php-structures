<?php

namespace Sunaoka\Aws\Structures\FMS\ListDiscoveredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $URI
 * @property string $AccountId
 * @property string $Type
 * @property string $Name
 */
class DiscoveredResource extends Shape
{
    /**
     * @param array{
     *     URI?: string,
     *     AccountId?: string,
     *     Type?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
