<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJobEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property list<Shapes\JobEntityIdentifiersUnion> $identifiers
 */
class BatchGetJobEntityRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     workerId: string,
     *     identifiers: list<Shapes\JobEntityIdentifiersUnion>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
