<?php

namespace Sunaoka\Aws\Structures\Kinesis\IncreaseStreamRetentionPeriod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property int $RetentionPeriodHours
 * @property string|null $StreamARN
 */
class IncreaseStreamRetentionPeriodRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     RetentionPeriodHours: int,
     *     StreamARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
