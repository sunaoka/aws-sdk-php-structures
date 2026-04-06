<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateCollectionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'ENABLED'|'DISABLED' $standbyReplicas
 * @property string|null $description
 * @property list<Shapes\Tag>|null $tags
 * @property Shapes\CollectionGroupCapacityLimits|null $capacityLimits
 * @property string|null $clientToken
 */
class CreateCollectionGroupRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     standbyReplicas: 'ENABLED'|'DISABLED',
     *     description?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     capacityLimits?: Shapes\CollectionGroupCapacityLimits|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
