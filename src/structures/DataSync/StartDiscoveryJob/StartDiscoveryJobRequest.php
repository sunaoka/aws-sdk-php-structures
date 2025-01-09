<?php

namespace Sunaoka\Aws\Structures\DataSync\StartDiscoveryJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 * @property int $CollectionDurationMinutes
 * @property string $ClientToken
 * @property list<Shapes\TagListEntry> $Tags
 */
class StartDiscoveryJobRequest extends Request
{
    /**
     * @param array{
     *     StorageSystemArn: string,
     *     CollectionDurationMinutes: int,
     *     ClientToken: string,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
