<?php

namespace Sunaoka\Aws\Structures\Kinesis\DecreaseStreamRetentionPeriod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property int $RetentionPeriodHours
 * @property string $StreamARN
 */
class DecreaseStreamRetentionPeriodRequest extends Request
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
