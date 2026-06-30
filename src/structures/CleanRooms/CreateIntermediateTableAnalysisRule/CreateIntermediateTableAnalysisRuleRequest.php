<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTableAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $intermediateTableIdentifier
 * @property 'CUSTOM' $analysisRuleType
 * @property Shapes\IntermediateTableAnalysisRulePolicy $analysisRulePolicy
 */
class CreateIntermediateTableAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     intermediateTableIdentifier: string,
     *     analysisRuleType: 'CUSTOM',
     *     analysisRulePolicy: Shapes\IntermediateTableAnalysisRulePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
