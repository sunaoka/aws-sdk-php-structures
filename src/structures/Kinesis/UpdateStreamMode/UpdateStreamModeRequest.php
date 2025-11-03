<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property Shapes\StreamModeDetails $StreamModeDetails
 * @property int<0, max>|null $WarmThroughputMiBps
 */
class UpdateStreamModeRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamModeDetails: Shapes\StreamModeDetails,
     *     WarmThroughputMiBps?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
