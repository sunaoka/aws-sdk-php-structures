<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormId
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastActivatedTime
 * @property string|null $LastActivatedBy
 * @property int $LatestVersion
 * @property int|null $ActiveVersion
 */
class EvaluationFormSummary extends Shape
{
    /**
     * @param array{
     *     EvaluationFormId: string,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedBy: string,
     *     LastActivatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastActivatedBy?: string|null,
     *     LatestVersion: int,
     *     ActiveVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
