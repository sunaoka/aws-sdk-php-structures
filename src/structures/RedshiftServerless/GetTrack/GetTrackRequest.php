<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetTrack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trackName
 */
class GetTrackRequest extends Request
{
    /**
     * @param array{trackName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
