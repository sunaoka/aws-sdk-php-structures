<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $operationId
 * @property SetupRequest|null $request
 * @property SetupHistoryResource|null $resource
 * @property list<SetupExecutionDetails>|null $executionDetails
 * @property 'succeeded'|'failed'|'inProgress'|null $status
 */
class SetupHistory extends Shape
{
    /**
     * @param array{
     *     operationId?: string|null,
     *     request?: SetupRequest|null,
     *     resource?: SetupHistoryResource|null,
     *     executionDetails?: list<SetupExecutionDetails>|null,
     *     status?: 'succeeded'|'failed'|'inProgress'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
