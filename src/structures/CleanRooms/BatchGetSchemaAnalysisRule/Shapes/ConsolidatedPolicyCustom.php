<?php

namespace Sunaoka\Aws\Structures\CleanRooms\BatchGetSchemaAnalysisRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $allowedAnalyses
 * @property list<string>|null $allowedAnalysisProviders
 * @property 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null $additionalAnalyses
 * @property list<string>|null $disallowedOutputColumns
 * @property DifferentialPrivacyConfiguration|null $differentialPrivacy
 * @property list<string>|null $allowedResultReceivers
 * @property list<string>|null $allowedAdditionalAnalyses
 */
class ConsolidatedPolicyCustom extends Shape
{
    /**
     * @param array{
     *     allowedAnalyses: list<string>,
     *     allowedAnalysisProviders?: list<string>|null,
     *     additionalAnalyses?: 'ALLOWED'|'REQUIRED'|'NOT_ALLOWED'|null,
     *     disallowedOutputColumns?: list<string>|null,
     *     differentialPrivacy?: DifferentialPrivacyConfiguration|null,
     *     allowedResultReceivers?: list<string>|null,
     *     allowedAdditionalAnalyses?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
