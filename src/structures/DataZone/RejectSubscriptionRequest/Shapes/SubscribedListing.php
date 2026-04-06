<?php

namespace Sunaoka\Aws\Structures\DataZone\RejectSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $id
 * @property SubscribedListingItem $item
 * @property string $name
 * @property string $ownerProjectId
 * @property string|null $ownerProjectName
 * @property string|null $revision
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
     *     ownerProjectName?: string|null,
     *     revision?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
