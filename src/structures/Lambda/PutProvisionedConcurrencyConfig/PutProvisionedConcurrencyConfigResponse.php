<?php

namespace Sunaoka\Aws\Structures\Lambda\PutProvisionedConcurrencyConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $RequestedProvisionedConcurrentExecutions
 * @property int $AvailableProvisionedConcurrentExecutions
 * @property int $AllocatedProvisionedConcurrentExecutions
 * @property 'IN_PROGRESS'|'READY'|'FAILED' $Status
 * @property string $StatusReason
 * @property string $LastModified
 */
class PutProvisionedConcurrencyConfigResponse extends Response
{
}
