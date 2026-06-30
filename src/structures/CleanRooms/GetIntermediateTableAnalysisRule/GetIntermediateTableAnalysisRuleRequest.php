<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetIntermediateTableAnalysisRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string $intermediateTableIdentifier
 * @property 'CUSTOM' $analysisRuleType
 */
class GetIntermediateTableAnalysisRuleRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     intermediateTableIdentifier: string,
     *     analysisRuleType: 'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
