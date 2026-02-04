<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamWarmThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamARN
 * @property string|null $StreamName
 * @property string|null $StreamId
 * @property int<0, max> $WarmThroughputMiBps
 */
class UpdateStreamWarmThroughputRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     StreamName?: string|null,
     *     StreamId?: string|null,
     *     WarmThroughputMiBps: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
