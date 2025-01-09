<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteConfiguredTableAssociationAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $configuredTableAssociationIdentifier
 * @property 'AGGREGATION'|'LIST'|'CUSTOM' $analysisRuleType
 */
class DeleteConfiguredTableAssociationAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     configuredTableAssociationIdentifier: string,
     *     analysisRuleType: 'AGGREGATION'|'LIST'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
