<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\DeleteMicrovmImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $imageIdentifier
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|'DELETED' $state
 */
class DeleteMicrovmImageResponse extends Response
{
}
