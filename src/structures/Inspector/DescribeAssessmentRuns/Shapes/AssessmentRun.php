<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $assessmentTemplateArn
 * @property 'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED' $state
 * @property int<180, 86400> $durationInSeconds
 * @property list<string> $rulesPackageArns
 * @property list<Attribute> $userAttributesForFindings
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property \Aws\Api\DateTimeResult $stateChangedAt
 * @property bool $dataCollected
 * @property list<AssessmentRunStateChange> $stateChanges
 * @property list<AssessmentRunNotification> $notifications
 * @property array<'Low'|'Medium'|'High'|'Informational'|'Undefined', int> $findingCounts
 */
class AssessmentRun extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     assessmentTemplateArn: string,
     *     state: 'CREATED'|'START_DATA_COLLECTION_PENDING'|'START_DATA_COLLECTION_IN_PROGRESS'|'COLLECTING_DATA'|'STOP_DATA_COLLECTION_PENDING'|'DATA_COLLECTED'|'START_EVALUATING_RULES_PENDING'|'EVALUATING_RULES'|'FAILED'|'ERROR'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELED',
     *     durationInSeconds: int<180, 86400>,
     *     rulesPackageArns: list<string>,
     *     userAttributesForFindings: list<Attribute>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     stateChangedAt: \Aws\Api\DateTimeResult,
     *     dataCollected: bool,
     *     stateChanges: list<AssessmentRunStateChange>,
     *     notifications: list<AssessmentRunNotification>,
     *     findingCounts: array<'Low'|'Medium'|'High'|'Informational'|'Undefined', int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
