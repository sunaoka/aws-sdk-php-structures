<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeS3AccessPointAttachments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|'MISCONFIGURED'|null $Lifecycle
 * @property LifecycleTransitionReason|null $LifecycleTransitionReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Name
 * @property 'OPENZFS'|'ONTAP'|null $Type
 * @property S3AccessPointOpenZFSConfiguration|null $OpenZFSConfiguration
 * @property S3AccessPointOntapConfiguration|null $OntapConfiguration
 * @property S3AccessPoint|null $S3AccessPoint
 */
class S3AccessPointAttachment extends Shape
{
    /**
     * @param array{
     *     Lifecycle?: 'AVAILABLE'|'CREATING'|'DELETING'|'UPDATING'|'FAILED'|'MISCONFIGURED'|null,
     *     LifecycleTransitionReason?: LifecycleTransitionReason|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     Name?: string|null,
     *     Type?: 'OPENZFS'|'ONTAP'|null,
     *     OpenZFSConfiguration?: S3AccessPointOpenZFSConfiguration|null,
     *     OntapConfiguration?: S3AccessPointOntapConfiguration|null,
     *     S3AccessPoint?: S3AccessPoint|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
