<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamMode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string|null $StreamId
 * @property Shapes\StreamModeDetails $StreamModeDetails
 * @property int<0, max>|null $WarmThroughputMiBps
 */
class UpdateStreamModeRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     StreamId?: string|null,
     *     StreamModeDetails: Shapes\StreamModeDetails,
     *     WarmThroughputMiBps?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
