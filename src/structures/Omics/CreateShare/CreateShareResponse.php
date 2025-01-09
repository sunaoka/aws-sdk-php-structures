<?php

namespace Sunaoka\Aws\Structures\Omics\CreateShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $shareId
 * @property 'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED' $status
 * @property string $shareName
 */
class CreateShareResponse extends Response
{
}
