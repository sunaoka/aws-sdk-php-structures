<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchUpdateCase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CaseIdentifierUnion $caseIdentifier
 */
class BatchUpdateCaseIdentifier extends Shape
{
    /**
     * @param array{caseIdentifier: CaseIdentifierUnion} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
