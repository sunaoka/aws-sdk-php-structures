<?php

namespace Sunaoka\Aws\Structures\Connect\GetEvaluationFormValidation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IssueCode
 * @property list<EvaluationFormValidationFindingItem>|null $Items
 * @property string $Description
 * @property string|null $Suggestion
 * @property 'WARNING'|'ERROR' $Severity
 */
class EvaluationFormValidationFinding extends Shape
{
    /**
     * @param array{
     *     IssueCode: string,
     *     Items?: list<EvaluationFormValidationFindingItem>|null,
     *     Description: string,
     *     Suggestion?: string|null,
     *     Severity: 'WARNING'|'ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
