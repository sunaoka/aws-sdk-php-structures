<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateDiscoveryJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscoveryJobArn
 * @property int<60, 44640> $CollectionDurationMinutes
 */
class UpdateDiscoveryJobRequest extends Request
{
    /**
     * @param array{
     *     DiscoveryJobArn: string,
     *     CollectionDurationMinutes: int<60, 44640>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
