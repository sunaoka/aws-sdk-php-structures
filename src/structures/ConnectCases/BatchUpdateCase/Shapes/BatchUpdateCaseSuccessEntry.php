<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchUpdateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseIdentifier $caseIdentifier
 */
class BatchUpdateCaseSuccessEntry extends Shape
{
    /**
     * @param array{caseIdentifier: CaseIdentifier} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
