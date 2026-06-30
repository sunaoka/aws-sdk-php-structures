<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InheritedAdditionalAnalyses|null $additionalAnalyses
 * @property InheritedAllowedAdditionalAnalyses|null $allowedAdditionalAnalyses
 * @property InheritedAllowedResultReceivers|null $allowedResultReceivers
 * @property InheritedDisallowedOutputColumns|null $disallowedOutputColumns
 */
class IntermediateTableInheritedConstraints extends Shape
{
    /**
     * @param array{
     *     additionalAnalyses?: InheritedAdditionalAnalyses|null,
     *     allowedAdditionalAnalyses?: InheritedAllowedAdditionalAnalyses|null,
     *     allowedResultReceivers?: InheritedAllowedResultReceivers|null,
     *     disallowedOutputColumns?: InheritedDisallowedOutputColumns|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
