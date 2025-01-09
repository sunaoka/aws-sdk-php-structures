<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTableAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $configuredTableIdentifier
 * @property 'AGGREGATION'|'LIST'|'CUSTOM' $analysisRuleType
 */
class DeleteConfiguredTableAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     configuredTableIdentifier: string,
     *     analysisRuleType: 'AGGREGATION'|'LIST'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
