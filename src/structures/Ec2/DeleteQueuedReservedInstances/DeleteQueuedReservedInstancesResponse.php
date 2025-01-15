<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SuccessfulQueuedPurchaseDeletion>|null $SuccessfulQueuedPurchaseDeletions
 * @property list<Shapes\FailedQueuedPurchaseDeletion>|null $FailedQueuedPurchaseDeletions
 */
class DeleteQueuedReservedInstancesResponse extends Response
{
}
