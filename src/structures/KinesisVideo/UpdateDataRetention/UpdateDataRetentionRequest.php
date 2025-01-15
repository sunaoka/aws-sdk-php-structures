<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateDataRetention;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property string $CurrentVersion
 * @property 'INCREASE_DATA_RETENTION'|'DECREASE_DATA_RETENTION' $Operation
 * @property int<1, max> $DataRetentionChangeInHours
 */
class UpdateDataRetentionRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
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
