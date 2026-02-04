<?php

namespace Sunaoka\Aws\Structures\Kinesis\DecreaseStreamRetentionPeriod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property int $RetentionPeriodHours
 * @property string|null $StreamARN
 * @property string|null $StreamId
 */
class DecreaseStreamRetentionPeriodRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     RetentionPeriodHours: int,
     *     StreamARN?: string|null,
     *     StreamId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
