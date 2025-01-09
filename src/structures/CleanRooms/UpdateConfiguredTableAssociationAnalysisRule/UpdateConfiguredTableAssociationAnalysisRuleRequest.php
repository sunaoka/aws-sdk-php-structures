<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAssociationAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $configuredTableAssociationIdentifier
 * @property 'AGGREGATION'|'LIST'|'CUSTOM' $analysisRuleType
 * @property Shapes\ConfiguredTableAssociationAnalysisRulePolicy $analysisRulePolicy
 */
class UpdateConfiguredTableAssociationAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredTableAssociationIdentifier: string,
     *     analysisRuleType: 'AGGREGATION'|'LIST'|'CUSTOM',
     *     analysisRulePolicy: Shapes\ConfiguredTableAssociationAnalysisRulePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
