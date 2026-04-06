<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAssociationAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedResultReceivers
 * @property list<string>|null $allowedAdditionalAnalyses
 */
class ConfiguredTableAssociationAnalysisRuleAggregation extends Shape
{
    /**
     * @param array{
     *     allowedResultReceivers?: list<string>|null,
     *     allowedAdditionalAnalyses?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
