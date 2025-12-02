<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormId
 * @property int $EvaluationFormVersion
 * @property bool $Locked
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property string|null $Description
 * @property 'DRAFT'|'ACTIVE' $Status
 * @property list<EvaluationFormItem> $Items
 * @property EvaluationFormScoringStrategy|null $ScoringStrategy
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedBy
 * @property EvaluationFormAutoEvaluationConfiguration|null $AutoEvaluationConfiguration
 * @property array<string, string>|null $Tags
 * @property EvaluationFormTargetConfiguration|null $TargetConfiguration
 * @property EvaluationFormLanguageConfiguration|null $LanguageConfiguration
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
     *     Description?: string|null,
     *     Status: 'DRAFT'|'ACTIVE',
     *     Items: list<EvaluationFormItem>,
     *     ScoringStrategy?: EvaluationFormScoringStrategy|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedBy: string,
     *     AutoEvaluationConfiguration?: EvaluationFormAutoEvaluationConfiguration|null,
     *     Tags?: array<string, string>|null,
     *     TargetConfiguration?: EvaluationFormTargetConfiguration|null,
     *     LanguageConfiguration?: EvaluationFormLanguageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
