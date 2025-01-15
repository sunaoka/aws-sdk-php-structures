<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetTranscript\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $AbsoluteTime
 * @property int<0, 100>|null $MostRecent
 */
class StartPosition extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     AbsoluteTime?: string|null,
     *     MostRecent?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
