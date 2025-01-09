<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateAnomaly;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyId
 * @property string $patternId
 * @property string $anomalyDetectorArn
 * @property 'LIMITED'|'INFINITE' $suppressionType
 * @property Shapes\SuppressionPeriod $suppressionPeriod
 * @property bool $baseline
 */
class UpdateAnomalyRequest extends Request
{
    /**
     * @param array{
     *     anomalyId?: string,
     *     patternId?: string,
     *     anomalyDetectorArn: string,
     *     suppressionType?: 'LIMITED'|'INFINITE',
     *     suppressionPeriod?: Shapes\SuppressionPeriod,
     *     baseline?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
