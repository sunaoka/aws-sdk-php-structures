<?php

namespace Sunaoka\Aws\Structures\FMS\ListDiscoveredResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $URI
 * @property string|null $AccountId
 * @property string|null $Type
 * @property string|null $Name
 */
class DiscoveredResource extends Shape
{
    /**
     * @param array{
     *     URI?: string|null,
     *     AccountId?: string|null,
     *     Type?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
