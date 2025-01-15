<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $expectedComplianceStatus
 * @property string|null $expectedRpoDescription
 * @property int<0, max>|null $expectedRpoInSecs
 * @property string|null $expectedRtoDescription
 * @property int<0, max>|null $expectedRtoInSecs
 */
class RecommendationDisruptionCompliance extends Shape
{
    /**
     * @param array{
     *     expectedComplianceStatus: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     expectedRpoDescription?: string|null,
     *     expectedRpoInSecs?: int<0, max>|null,
     *     expectedRtoDescription?: string|null,
     *     expectedRtoInSecs?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
