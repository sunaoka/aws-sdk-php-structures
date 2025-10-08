<?php

namespace Sunaoka\Aws\Structures\Textract\AnalyzeExpense;

trait AnalyzeExpenseTrait
{
    /**
     * @param AnalyzeExpenseRequest $args
     * @return AnalyzeExpenseResponse
     */
    public function analyzeExpense(AnalyzeExpenseRequest $args)
    {
        $result = parent::analyzeExpense($args->toArray());
        return new AnalyzeExpenseResponse($result->toArray());
    }
}
