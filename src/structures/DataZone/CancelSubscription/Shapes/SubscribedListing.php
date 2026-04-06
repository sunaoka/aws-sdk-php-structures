<?php

namespace Sunaoka\Aws\Structures\DataZone\CancelSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string|null $revision
 * @property string $name
 * @property string $description
 * @property SubscribedListingItem $item
 * @property string $ownerProjectId
 * @property string|null $ownerProjectName
 */
class SubscribedListing extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     revision?: string|null,
     *     name: string,
     *     description: string,
     *     item: SubscribedListingItem,
     *     ownerProjectId: string,
     *     ownerProjectName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
