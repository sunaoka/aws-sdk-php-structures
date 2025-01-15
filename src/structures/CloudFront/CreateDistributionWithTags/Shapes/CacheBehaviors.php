<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<CacheBehavior>|null $Items
 */
class CacheBehaviors extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<CacheBehavior>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
