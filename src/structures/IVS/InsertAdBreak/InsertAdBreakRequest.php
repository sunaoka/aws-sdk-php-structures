<?php

namespace Sunaoka\Aws\Structures\IVS\InsertAdBreak;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property int<1, 300> $durationSeconds
 * @property string|null $adBreakId
 * @property \Aws\Api\DateTimeResult|null $targetStartAt
 */
class InsertAdBreakRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     durationSeconds: int<1, 300>,
     *     adBreakId?: string|null,
     *     targetStartAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
