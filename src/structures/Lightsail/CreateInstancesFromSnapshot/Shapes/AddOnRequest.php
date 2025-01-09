<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AutoSnapshot'|'StopInstanceOnIdle' $addOnType
 * @property AutoSnapshotAddOnRequest $autoSnapshotAddOnRequest
 * @property StopInstanceOnIdleRequest $stopInstanceOnIdleRequest
 */
class AddOnRequest extends Shape
{
    /**
     * @param array{
     *     addOnType: 'AutoSnapshot'|'StopInstanceOnIdle',
     *     autoSnapshotAddOnRequest?: AutoSnapshotAddOnRequest,
     *     stopInstanceOnIdleRequest?: StopInstanceOnIdleRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
