<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEvaluationForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationFormId
 * @property string $EvaluationFormArn
 * @property string $Title
 * @property 'DRAFT'|'ACTIVE' $Status
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastActivatedTime
 * @property string|null $LastActivatedBy
 * @property int $LatestVersion
 * @property int|null $ActiveVersion
 * @property bool|null $AutoEvaluationEnabled
 * @property 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|null $EvaluationFormLanguage
 * @property 'AGENT'|'AUTOMATED'|null $ContactInteractionType
 * @property array<string, string>|null $Tags
 */
class EvaluationFormSearchSummary extends Shape
{
    /**
     * @param array{
     *     EvaluationFormId: string,
     *     EvaluationFormArn: string,
     *     Title: string,
     *     Status: 'DRAFT'|'ACTIVE',
     *     Description?: string|null,
     *     CreatedTime: \Aws\Api\DateTimeResult,
     *     CreatedBy: string,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     LastModifiedBy: string,
     *     LastActivatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastActivatedBy?: string|null,
     *     LatestVersion: int,
     *     ActiveVersion?: int|null,
     *     AutoEvaluationEnabled?: bool|null,
     *     EvaluationFormLanguage?: 'de-DE'|'en-US'|'es-ES'|'fr-FR'|'it-IT'|'pt-BR'|null,
     *     ContactInteractionType?: 'AGENT'|'AUTOMATED'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
