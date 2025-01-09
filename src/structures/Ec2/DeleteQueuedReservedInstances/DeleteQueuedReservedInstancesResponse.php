<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SuccessfulQueuedPurchaseDeletion> $SuccessfulQueuedPurchaseDeletions
 * @property list<Shapes\FailedQueuedPurchaseDeletion> $FailedQueuedPurchaseDeletions
 */
class DeleteQueuedReservedInstancesResponse extends Response
{
}
