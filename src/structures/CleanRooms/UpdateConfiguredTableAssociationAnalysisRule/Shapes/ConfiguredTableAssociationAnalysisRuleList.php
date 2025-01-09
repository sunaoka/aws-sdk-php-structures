<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedResultReceivers
 * @property list<string> $allowedAdditionalAnalyses
 */
class ConfiguredTableAssociationAnalysisRuleList extends Shape
{
    /**
     * @param array{
     *     allowedResultReceivers?: list<string>,
     *     allowedAdditionalAnalyses?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
