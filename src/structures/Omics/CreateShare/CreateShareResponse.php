<?php

namespace Sunaoka\Aws\Structures\Omics\CreateShare;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $shareId
 * @property 'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|null $status
 * @property string|null $shareName
 */
class CreateShareResponse extends Response
{
}
