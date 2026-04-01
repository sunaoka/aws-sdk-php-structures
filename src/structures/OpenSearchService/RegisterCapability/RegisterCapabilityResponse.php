<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\RegisterCapability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $capabilityName
 * @property string|null $applicationId
 * @property 'creating'|'create_failed'|'active'|'updating'|'update_failed'|'deleting'|'delete_failed'|null $status
 * @property Shapes\CapabilityBaseResponseConfig|null $capabilityConfig
 */
class RegisterCapabilityResponse extends Response
{
}
