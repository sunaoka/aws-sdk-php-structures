<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateCollectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $description
 * @property Shapes\CollectionGroupCapacityLimits|null $capacityLimits
 * @property string|null $clientToken
 */
class UpdateCollectionGroupRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     description?: string|null,
     *     capacityLimits?: Shapes\CollectionGroupCapacityLimits|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
