<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\GetCapability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $capabilityName
 * @property string|null $applicationId
 * @property 'creating'|'create_failed'|'active'|'updating'|'update_failed'|'deleting'|'delete_failed'|null $status
 * @property Shapes\CapabilityExtendedResponseConfig|null $capabilityConfig
 * @property list<Shapes\CapabilityFailure>|null $failures
 */
class GetCapabilityResponse extends Response
{
}
