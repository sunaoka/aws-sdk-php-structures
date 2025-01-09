<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateDiscoveryJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property int $CollectionDurationMinutes
 */
class UpdateDiscoveryJobRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     CollectionDurationMinutes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
