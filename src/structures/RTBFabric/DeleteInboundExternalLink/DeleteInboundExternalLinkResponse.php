<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteInboundExternalLink;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $linkId
 * @property 'PENDING_CREATION'|'PENDING_REQUEST'|'REQUESTED'|'ACCEPTED'|'ACTIVE'|'REJECTED'|'FAILED'|'PENDING_DELETION'|'DELETED'|'PENDING_UPDATE'|'PENDING_ISOLATION'|'ISOLATED'|'PENDING_RESTORATION' $status
 */
class DeleteInboundExternalLinkResponse extends Response
{
}
