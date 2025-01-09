<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListImageSetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageSetId
 * @property string $versionId
 * @property 'ACTIVE'|'LOCKED'|'DELETED' $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED' $ImageSetWorkflowStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult $deletedAt
 * @property string $message
 * @property Overrides $overrides
 */
class ImageSetProperties extends Shape
{
    /**
     * @param array{
     *     imageSetId: string,
     *     versionId: string,
     *     imageSetState: 'ACTIVE'|'LOCKED'|'DELETED',
     *     ImageSetWorkflowStatus?: 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     deletedAt?: \Aws\Api\DateTimeResult,
     *     message?: string,
     *     overrides?: Overrides
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
