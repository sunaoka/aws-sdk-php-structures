<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryId
 * @property string $spaceId
 * @property string $name
 * @property string $actorId
 * @property string $sessionId
 */
class CreateMemoryDetail extends Shape
{
    /**
     * @param array{
     *     memoryId: string,
     *     spaceId: string,
     *     name: string,
     *     actorId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
