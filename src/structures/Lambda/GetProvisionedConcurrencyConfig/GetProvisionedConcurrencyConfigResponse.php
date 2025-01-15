<?php

namespace Sunaoka\Aws\Structures\Lambda\GetProvisionedConcurrencyConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max>|null $RequestedProvisionedConcurrentExecutions
 * @property int<0, max>|null $AvailableProvisionedConcurrentExecutions
 * @property int<0, max>|null $AllocatedProvisionedConcurrentExecutions
 * @property 'IN_PROGRESS'|'READY'|'FAILED'|null $Status
 * @property string|null $StatusReason
 * @property string|null $LastModified
 */
class GetProvisionedConcurrencyConfigResponse extends Response
{
}
