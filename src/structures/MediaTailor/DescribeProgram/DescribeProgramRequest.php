<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeProgram;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelName
 * @property string $ProgramName
 */
class DescribeProgramRequest extends Request
{
    /**
     * @param array{
     *     ChannelName: string,
     *     ProgramName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
