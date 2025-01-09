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
 * @property list<string> $modelIdentifiers
 * @property list<string> $ragIdentifiers
 * @property list<string> $evaluatorModelIdentifiers
 * @property 'ModelEvaluation'|'RagEvaluation' $applicationType
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
     *     modelIdentifiers?: list<string>,
     *     ragIdentifiers?: list<string>,
     *     evaluatorModelIdentifiers?: list<string>,
     *     applicationType?: 'ModelEvaluation'|'RagEvaluation'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
