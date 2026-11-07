<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchCreateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $caseId
 * @property string|null $referenceId
 */
class CaseIdentifierUnion extends Shape
{
    /**
     * @param array{
     *     caseId?: string|null,
     *     referenceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
