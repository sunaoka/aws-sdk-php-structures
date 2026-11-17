<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\UpdateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property list<Shapes\MemoryStrategy>|null $memoryStrategies
 * @property int<1, 365>|null $eventExpiryDays
 * @property int<0, 3650>|null $memoryExpiryDays
 * @property string|null $extractionModelId
 */
class UpdateSpaceRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     memoryStrategies?: list<Shapes\MemoryStrategy>|null,
     *     eventExpiryDays?: int<1, 365>|null,
     *     memoryExpiryDays?: int<0, 3650>|null,
     *     extractionModelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
