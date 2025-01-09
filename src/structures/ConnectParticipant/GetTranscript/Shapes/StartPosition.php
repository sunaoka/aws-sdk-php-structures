<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $AbsoluteTime
 * @property int<0, 100> $MostRecent
 */
class StartPosition extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     AbsoluteTime?: string,
     *     MostRecent?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
