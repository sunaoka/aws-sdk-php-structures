<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $anomalyId
 * @property string $patternId
 * @property string $anomalyDetectorArn
 * @property string $patternString
 * @property string $patternRegex
 * @property string $priority
 * @property int $firstSeen
 * @property int $lastSeen
 * @property string $description
 * @property bool $active
 * @property 'Active'|'Suppressed'|'Baseline' $state
 * @property array<string, int> $histogram
 * @property list<LogEvent> $logSamples
 * @property list<PatternToken> $patternTokens
 * @property list<string> $logGroupArnList
 * @property bool $suppressed
 * @property int $suppressedDate
 * @property int $suppressedUntil
 * @property bool $isPatternLevelSuppression
 */
class Anomaly extends Shape
{
    /**
     * @param array{
     *     anomalyId: string,
     *     patternId: string,
     *     anomalyDetectorArn: string,
     *     patternString: string,
     *     patternRegex?: string,
     *     priority?: string,
     *     firstSeen: int,
     *     lastSeen: int,
     *     description: string,
     *     active: bool,
     *     state: 'Active'|'Suppressed'|'Baseline',
     *     histogram: array<string, int>,
     *     logSamples: list<LogEvent>,
     *     patternTokens: list<PatternToken>,
     *     logGroupArnList: list<string>,
     *     suppressed?: bool,
     *     suppressedDate?: int,
     *     suppressedUntil?: int,
     *     isPatternLevelSuppression?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
