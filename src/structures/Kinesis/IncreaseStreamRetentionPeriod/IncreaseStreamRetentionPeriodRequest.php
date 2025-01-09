<?php

namespace Sunaoka\Aws\Structures\Kinesis\IncreaseStreamRetentionPeriod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int $RetentionPeriodHours
 * @property string $StreamARN
 */
class IncreaseStreamRetentionPeriodRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     RetentionPeriodHours: int,
     *     StreamARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
