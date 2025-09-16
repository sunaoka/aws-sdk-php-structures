<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CopyImageSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $imageSetId
 * @property string $latestVersionId
 * @property 'ACTIVE'|'LOCKED'|'DELETED'|null $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'IMPORTING'|'IMPORTED'|'IMPORT_FAILED'|null $imageSetWorkflowStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $imageSetArn
 */
class CopySourceImageSetProperties extends Shape
{
    /**
     * @param array{
     *     imageSetId: string,
     *     latestVersionId: string,
     *     imageSetState?: 'ACTIVE'|'LOCKED'|'DELETED'|null,
     *     imageSetWorkflowStatus?: 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'IMPORTING'|'IMPORTED'|'IMPORT_FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     imageSetArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
