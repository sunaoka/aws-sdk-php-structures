<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutLogAlarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AlarmName
 * @property string|null $AlarmDescription
 * @property Shapes\ScheduledQueryConfiguration $ScheduledQueryConfiguration
 * @property int|null $ActionLogLineCount
 * @property string|null $ActionLogLineRoleArn
 * @property bool|null $ActionsEnabled
 * @property list<string>|null $OKActions
 * @property list<string>|null $AlarmActions
 * @property list<string>|null $InsufficientDataActions
 * @property int<1, max> $QueryResultsToEvaluate
 * @property int<1, max> $QueryResultsToAlarm
 * @property double $Threshold
 * @property 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold' $ComparisonOperator
 * @property string|null $TreatMissingData
 * @property list<Shapes\Tag>|null $Tags
 */
class PutLogAlarmRequest extends Request
{
    /**
     * @param array{
     *     AlarmName: string,
     *     AlarmDescription?: string|null,
     *     ScheduledQueryConfiguration: Shapes\ScheduledQueryConfiguration,
     *     ActionLogLineCount?: int|null,
     *     ActionLogLineRoleArn?: string|null,
     *     ActionsEnabled?: bool|null,
     *     OKActions?: list<string>|null,
     *     AlarmActions?: list<string>|null,
     *     InsufficientDataActions?: list<string>|null,
     *     QueryResultsToEvaluate: int<1, max>,
     *     QueryResultsToAlarm: int<1, max>,
     *     Threshold: double,
     *     ComparisonOperator: 'GreaterThanOrEqualToThreshold'|'GreaterThanThreshold'|'LessThanThreshold'|'LessThanOrEqualToThreshold'|'LessThanLowerOrGreaterThanUpperThreshold'|'LessThanLowerThreshold'|'GreaterThanUpperThreshold',
     *     TreatMissingData?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
