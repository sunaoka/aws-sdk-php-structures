<?php

namespace Sunaoka\Aws\Structures\IVS\InsertAdBreak;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property int<1, 300> $durationSeconds
 */
class InsertAdBreakRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     durationSeconds: int<1, 300>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
