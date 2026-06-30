<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateIntermediateTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $allowedAnalyses
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null $additionalAnalyses
 * @property list<string>|null $allowedAdditionalAnalyses
 * @property list<string>|null $allowedAnalysisProviders
 * @property list<string>|null $allowedResultReceivers
 * @property DifferentialPrivacyConfiguration|null $differentialPrivacy
 * @property list<string>|null $disallowedOutputColumns
 */
class IntermediateTableAnalysisRuleCustom extends Shape
{
    /**
     * @param array{
     *     allowedAnalyses?: list<string>|null,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null,
     *     allowedAdditionalAnalyses?: list<string>|null,
     *     allowedAnalysisProviders?: list<string>|null,
     *     allowedResultReceivers?: list<string>|null,
     *     differentialPrivacy?: DifferentialPrivacyConfiguration|null,
     *     disallowedOutputColumns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
