<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetSetupHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $operationId
 * @property SetupRequest $request
 * @property SetupHistoryResource $resource
 * @property list<SetupExecutionDetails> $executionDetails
 * @property 'succeeded'|'failed'|'inProgress' $status
 */
class SetupHistory extends Shape
{
    /**
     * @param array{
     *     operationId?: string,
     *     request?: SetupRequest,
     *     resource?: SetupHistoryResource,
     *     executionDetails?: list<SetupExecutionDetails>,
     *     status?: 'succeeded'|'failed'|'inProgress'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
