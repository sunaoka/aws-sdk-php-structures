<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateInstancesFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AutoSnapshot'|'StopInstanceOnIdle' $addOnType
 * @property AutoSnapshotAddOnRequest|null $autoSnapshotAddOnRequest
 * @property StopInstanceOnIdleRequest|null $stopInstanceOnIdleRequest
 */
class AddOnRequest extends Shape
{
    /**
     * @param array{
     *     addOnType: 'AutoSnapshot'|'StopInstanceOnIdle',
     *     autoSnapshotAddOnRequest?: AutoSnapshotAddOnRequest|null,
     *     stopInstanceOnIdleRequest?: StopInstanceOnIdleRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
