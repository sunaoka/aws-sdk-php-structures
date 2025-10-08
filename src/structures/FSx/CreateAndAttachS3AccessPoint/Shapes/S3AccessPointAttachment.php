<?php

namespace Sunaoka\Aws\Structures\FSx\CreateAndAttachS3AccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|null $Lifecycle
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Name
 * @property 'OPENZFS'|null $Type
 * @property S3AccessPointOpenZFSConfiguration|null $OpenZFSConfiguration
 * @property S3AccessPoint|null $S3AccessPoint
 */
class S3AccessPointAttachment extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Type?: 'OPENZFS'|null,
     *     OpenZFSConfiguration?: S3AccessPointOpenZFSConfiguration|null,
     *     S3AccessPoint?: S3AccessPoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
