<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $versionId
 * @property 'ACTIVE'|'LOCKED'|'DELETED' $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED' $imageSetWorkflowStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult $deletedAt
 * @property string $message
 * @property string $imageSetArn
 * @property Shapes\Overrides $overrides
 */
class GetImageSetResponse extends Response
{
}
