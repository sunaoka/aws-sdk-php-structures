<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\GetMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $memoryId
 * @property string|null $actorId
 * @property string|null $strategyName
 */
class GetMemoryRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     memoryId: string,
     *     actorId?: string|null,
     *     strategyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
