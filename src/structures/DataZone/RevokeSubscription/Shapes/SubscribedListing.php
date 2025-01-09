<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $id
 * @property SubscribedListingItem $item
 * @property string $name
 * @property string $ownerProjectId
 * @property string $ownerProjectName
 * @property string $revision
 */
class SubscribedListing extends Shape
{
    /**
     * @param array{
     *     description: string,
     *     id: string,
     *     item: SubscribedListingItem,
     *     name: string,
     *     ownerProjectId: string,
     *     ownerProjectName?: string,
     *     revision?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
