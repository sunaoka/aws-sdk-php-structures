<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\ListImageSetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageSetId
 * @property string $versionId
 * @property 'ACTIVE'|'LOCKED'|'DELETED' $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|null $ImageSetWorkflowStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $deletedAt
 * @property string|null $message
 * @property Overrides|null $overrides
 */
class ImageSetProperties extends Shape
{
    /**
     * @param array{
     *     imageSetId: string,
     *     versionId: string,
     *     imageSetState: 'ACTIVE'|'LOCKED'|'DELETED',
     *     ImageSetWorkflowStatus?: 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     deletedAt?: \Aws\Api\DateTimeResult|null,
     *     message?: string|null,
     *     overrides?: Overrides|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
