<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $revision
 */
class ListingRevision extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     revision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
