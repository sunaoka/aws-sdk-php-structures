<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAnalyses
 * @property list<string> $allowedAnalysisProviders
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED' $additionalAnalyses
 * @property list<string> $disallowedOutputColumns
 * @property DifferentialPrivacyConfiguration $differentialPrivacy
 */
class AnalysisRuleCustom extends Shape
{
    /**
     * @param array{
     *     allowedAnalyses: list<string>,
     *     allowedAnalysisProviders?: list<string>,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED',
     *     disallowedOutputColumns?: list<string>,
     *     differentialPrivacy?: DifferentialPrivacyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
