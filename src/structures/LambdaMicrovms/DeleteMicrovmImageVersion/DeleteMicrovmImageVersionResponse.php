<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\DeleteMicrovmImageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $imageIdentifier
 * @property string $imageVersion
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'DELETING'|'DELETED'|'DELETE_FAILED' $state
 */
class DeleteMicrovmImageVersionResponse extends Response
{
}
