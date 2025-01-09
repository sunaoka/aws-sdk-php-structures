<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateConfiguredTableAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 * @property 'AGGREGATION'|'LIST'|'CUSTOM' $analysisRuleType
 * @property Shapes\ConfiguredTableAnalysisRulePolicy $analysisRulePolicy
 */
class UpdateConfiguredTableAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     configuredTableIdentifier: string,
     *     analysisRuleType: 'AGGREGATION'|'LIST'|'CUSTOM',
     *     analysisRulePolicy: Shapes\ConfiguredTableAnalysisRulePolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
