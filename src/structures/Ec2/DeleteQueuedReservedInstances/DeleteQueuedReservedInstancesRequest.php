<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteQueuedReservedInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string> $ReservedInstancesIds
 */
class DeleteQueuedReservedInstancesRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ReservedInstancesIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
