<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 */
class ConnectCaseContent extends Shape
{
    /**
     * @param array{caseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
