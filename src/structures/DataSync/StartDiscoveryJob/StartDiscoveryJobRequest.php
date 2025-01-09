<?php

namespace Sunaoka\Aws\Structures\DataSync\StartDiscoveryJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StorageSystemArn
 * @property int<60, 44640> $CollectionDurationMinutes
 * @property string $ClientToken
 * @property list<Shapes\TagListEntry> $Tags
 */
class StartDiscoveryJobRequest extends Request
{
    /**
     * @param array{
     *     StorageSystemArn: string,
     *     CollectionDurationMinutes: int<60, 44640>,
     *     ClientToken: string,
     *     Tags?: list<Shapes\TagListEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
