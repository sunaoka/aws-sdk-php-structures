<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property ListSolNetworkInstanceMetadata $metadata
 * @property string $nsInstanceDescription
 * @property string $nsInstanceName
 * @property 'INSTANTIATED'|'NOT_INSTANTIATED'|'UPDATED'|'IMPAIRED'|'UPDATE_FAILED'|'STOPPED'|'DELETED'|'INSTANTIATE_IN_PROGRESS'|'INTENT_TO_UPDATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'TERMINATE_IN_PROGRESS' $nsState
 * @property string $nsdId
 * @property string $nsdInfoId
 */
class ListSolNetworkInstanceInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     metadata: ListSolNetworkInstanceMetadata,
     *     nsInstanceDescription: string,
     *     nsInstanceName: string,
     *     nsState: 'INSTANTIATED'|'NOT_INSTANTIATED'|'UPDATED'|'IMPAIRED'|'UPDATE_FAILED'|'STOPPED'|'DELETED'|'INSTANTIATE_IN_PROGRESS'|'INTENT_TO_UPDATE_IN_PROGRESS'|'UPDATE_IN_PROGRESS'|'TERMINATE_IN_PROGRESS',
     *     nsdId: string,
     *     nsdInfoId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
