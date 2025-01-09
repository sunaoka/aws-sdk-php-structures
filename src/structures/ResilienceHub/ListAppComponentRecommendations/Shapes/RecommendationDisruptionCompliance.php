<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppComponentRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $expectedComplianceStatus
 * @property string $expectedRpoDescription
 * @property int<0, max> $expectedRpoInSecs
 * @property string $expectedRtoDescription
 * @property int<0, max> $expectedRtoInSecs
 */
class RecommendationDisruptionCompliance extends Shape
{
    /**
     * @param array{
     *     expectedComplianceStatus: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     expectedRpoDescription?: string,
     *     expectedRpoInSecs?: int<0, max>,
     *     expectedRtoDescription?: string,
     *     expectedRtoInSecs?: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
