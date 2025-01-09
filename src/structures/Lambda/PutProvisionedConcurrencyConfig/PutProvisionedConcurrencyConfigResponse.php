<?php

namespace Sunaoka\Aws\Structures\Lambda\PutProvisionedConcurrencyConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<1, max> $RequestedProvisionedConcurrentExecutions
 * @property int<0, max> $AvailableProvisionedConcurrentExecutions
 * @property int<0, max> $AllocatedProvisionedConcurrentExecutions
 * @property 'IN_PROGRESS'|'READY'|'FAILED' $Status
 * @property string $StatusReason
 * @property string $LastModified
 */
class PutProvisionedConcurrencyConfigResponse extends Response
{
}
