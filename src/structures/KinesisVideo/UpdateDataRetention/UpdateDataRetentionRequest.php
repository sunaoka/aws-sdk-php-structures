<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateDataRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property string $CurrentVersion
 * @property 'INCREASE_DATA_RETENTION'|'DECREASE_DATA_RETENTION' $Operation
 * @property int<1, max> $DataRetentionChangeInHours
 */
class UpdateDataRetentionRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     CurrentVersion: string,
     *     Operation: 'INCREASE_DATA_RETENTION'|'DECREASE_DATA_RETENTION',
     *     DataRetentionChangeInHours: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
