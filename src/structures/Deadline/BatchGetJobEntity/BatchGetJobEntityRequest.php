<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property list<Shapes\JobEntityIdentifiersUnion> $identifiers
 * @property string $workerId
 */
class BatchGetJobEntityRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     identifiers: list<Shapes\JobEntityIdentifiersUnion>,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
