<?php

namespace Sunaoka\Aws\Structures\Connect\ListEvaluationFormVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormArn
 * @property string $EvaluationFormId
 * @property int $EvaluationFormVersion
 * @property bool $Locked
 * @property 'DRAFT'|'ACTIVE' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedBy
 */
class EvaluationFormVersionSummary extends Shape
{
    /**
     * @param array{
     *     EvaluationFormArn: string,
     *     EvaluationFormId: string,
     *     EvaluationFormVersion: int,
     *     Locked: bool,
     *     Status: 'DRAFT'|'ACTIVE',
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedBy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
