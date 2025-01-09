<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCasesForContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 * @property string $templateId
 */
class CaseSummary extends Shape
{
    /**
     * @param array{
     *     caseId: string,
     *     templateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
