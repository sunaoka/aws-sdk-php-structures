<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetImageSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $versionId
 * @property 'ACTIVE'|'LOCKED'|'DELETED' $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|null $imageSetWorkflowStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property \Aws\Api\DateTimeResult|null $deletedAt
 * @property string|null $message
 * @property string|null $imageSetArn
 * @property Shapes\Overrides|null $overrides
 * @property bool|null $isPrimary
 */
class GetImageSetResponse extends Response
{
}
