<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identifier
 * @property string $revision
 */
class ListingRevisionInput extends Shape
{
    /**
     * @param array{
     *     identifier: string,
     *     revision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
