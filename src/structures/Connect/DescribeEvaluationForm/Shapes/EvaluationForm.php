<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormId
 * @property int $EvaluationFormVersion
 * @property bool $Locked
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property string $Description
 * @property 'DRAFT'|'ACTIVE' $Status
 * @property list<EvaluationFormItem> $Items
 * @property EvaluationFormScoringStrategy $ScoringStrategy
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedBy
 * @property array<string, string> $Tags
 */
class EvaluationForm extends Shape
{
    /**
     * @param array{
     *     EvaluationFormId: string,
     *     EvaluationFormVersion: int,
     *     Locked: bool,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     Description?: string,
     *     Status: 'DRAFT'|'ACTIVE',
     *     Items: list<EvaluationFormItem>,
     *     ScoringStrategy?: EvaluationFormScoringStrategy,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedBy: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
