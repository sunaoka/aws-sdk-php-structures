<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\AssociatePublisher;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $recordArn
 * @property string $publicIdentifier
 * @property string $publisher
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'SUSPENDED' $status
 * @property string|null $statusReason
 */
class AssociatePublisherResponse extends Response
{
}
