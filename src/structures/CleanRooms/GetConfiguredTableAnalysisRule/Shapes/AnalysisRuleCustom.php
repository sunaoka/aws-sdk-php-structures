<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetConfiguredTableAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAnalyses
 * @property list<string>|null $allowedAnalysisProviders
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null $additionalAnalyses
 * @property list<string>|null $disallowedOutputColumns
 * @property DifferentialPrivacyConfiguration|null $differentialPrivacy
 */
class AnalysisRuleCustom extends Shape
{
    /**
     * @param array{
     *     allowedAnalyses: list<string>,
     *     allowedAnalysisProviders?: list<string>|null,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null,
     *     disallowedOutputColumns?: list<string>|null,
     *     differentialPrivacy?: DifferentialPrivacyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
