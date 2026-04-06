<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateAnomaly;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $anomalyId
 * @property string|null $patternId
 * @property string $anomalyDetectorArn
 * @property 'LIMITED'|'INFINITE'|null $suppressionType
 * @property Shapes\SuppressionPeriod|null $suppressionPeriod
 * @property bool|null $baseline
 */
class UpdateAnomalyRequest extends Request
{
    /**
     * @param array{
     *     anomalyId?: string|null,
     *     patternId?: string|null,
     *     anomalyDetectorArn: string,
     *     suppressionType?: 'LIMITED'|'INFINITE'|null,
     *     suppressionPeriod?: Shapes\SuppressionPeriod|null,
     *     baseline?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
