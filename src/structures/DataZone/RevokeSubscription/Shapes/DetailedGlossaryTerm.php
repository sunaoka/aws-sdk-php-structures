<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $shortDescription
 */
class DetailedGlossaryTerm extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     shortDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
