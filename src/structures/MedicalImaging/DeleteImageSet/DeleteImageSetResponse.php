<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\DeleteImageSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $datastoreId
 * @property string $imageSetId
 * @property 'ACTIVE'|'LOCKED'|'DELETED' $imageSetState
 * @property 'CREATED'|'COPIED'|'COPYING'|'COPYING_WITH_READ_ONLY_ACCESS'|'COPY_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETED'|'IMPORTING'|'IMPORTED'|'IMPORT_FAILED' $imageSetWorkflowStatus
 */
class DeleteImageSetResponse extends Response
{
}
