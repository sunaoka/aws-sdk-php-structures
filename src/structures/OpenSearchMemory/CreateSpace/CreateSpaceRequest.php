<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\MemoryStrategy>|null $memoryStrategies
 * @property int<1, 365>|null $eventExpiryDays
 * @property int<0, 3650>|null $memoryExpiryDays
 * @property string|null $extractionModelId
 * @property Shapes\EncryptionConfiguration|null $encryptionConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreateSpaceRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     memoryStrategies?: list<Shapes\MemoryStrategy>|null,
     *     eventExpiryDays?: int<1, 365>|null,
     *     memoryExpiryDays?: int<0, 3650>|null,
     *     extractionModelId?: string|null,
     *     encryptionConfiguration?: Shapes\EncryptionConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
