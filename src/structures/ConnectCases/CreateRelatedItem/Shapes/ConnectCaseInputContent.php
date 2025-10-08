<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseId
 */
class ConnectCaseInputContent extends Shape
{
    /**
     * @param array{caseId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
