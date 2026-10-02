<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetRemediationsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceType
 * @property string $ExposureType
 * @property list<string> $TraitTitles
 * @property string $Reversibility
 * @property string $FixEffect
 * @property string $RiskLevel
 * @property string|null $AutomationLevel
 * @property bool|null $HumanReviewRequired
 * @property \Aws\Api\DateTimeResult|null $GeneratedAt
 * @property string|null $VerificationStatus
 */
class RemediationGuidanceMetadata extends Shape
{
    /**
     * @param array{
     *     ResourceType: string,
     *     ExposureType: string,
     *     TraitTitles: list<string>,
     *     Reversibility: string,
     *     FixEffect: string,
     *     RiskLevel: string,
     *     AutomationLevel?: string|null,
     *     HumanReviewRequired?: bool|null,
     *     GeneratedAt?: \Aws\Api\DateTimeResult|null,
     *     VerificationStatus?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
