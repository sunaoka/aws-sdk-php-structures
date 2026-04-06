<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobArn
 * @property string $jobName
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'Human'|'Automated' $jobType
 * @property list<'Summarization'|'Classification'|'QuestionAndAnswer'|'Generation'|'Custom'> $evaluationTaskTypes
 * @property list<string>|null $modelIdentifiers
 * @property list<string>|null $ragIdentifiers
 * @property list<string>|null $evaluatorModelIdentifiers
 * @property list<string>|null $customMetricsEvaluatorModelIdentifiers
 * @property EvaluationInferenceConfigSummary|null $inferenceConfigSummary
 * @property 'ModelEvaluation'|'RagEvaluation'|null $applicationType
 */
class EvaluationSummary extends Shape
{
    /**
     * @param array{
     *     jobArn: string,
     *     jobName: string,
     *     status: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     jobType: 'Human'|'Automated',
     *     evaluationTaskTypes: list<'Summarization'|'Classification'|'QuestionAndAnswer'|'Generation'|'Custom'>,
     *     modelIdentifiers?: list<string>|null,
     *     ragIdentifiers?: list<string>|null,
     *     evaluatorModelIdentifiers?: list<string>|null,
     *     customMetricsEvaluatorModelIdentifiers?: list<string>|null,
     *     inferenceConfigSummary?: EvaluationInferenceConfigSummary|null,
     *     applicationType?: 'ModelEvaluation'|'RagEvaluation'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
