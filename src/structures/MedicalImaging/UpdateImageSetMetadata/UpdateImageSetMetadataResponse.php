<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\UpdateImageSetMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property string $latestVersionId
 * @property 'ACTIVE'|'LOCKED'|'DELETED' $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'IMPORTING'|'IMPORTED'|'IMPORT_FAILED'|null $imageSetWorkflowStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $message
 */
class UpdateImageSetMetadataResponse extends Response
{
}
