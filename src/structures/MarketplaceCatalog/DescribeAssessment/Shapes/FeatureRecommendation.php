<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUEST_PRIVATE_OFFER'|'REQUEST_A_DEMO'|'PROMOTIONAL_MEDIA'|'FREE_TRIAL'|'QUICK_LAUNCH' $FeatureId
 * @property string $Action
 * @property string $Rationale
 * @property 'BLOCKING'|'ADVISORY' $Severity
 * @property 'PASS'|'FAIL' $Status
 */
class FeatureRecommendation extends Shape
{
    /**
     * @param array{
     *     FeatureId: 'REQUEST_PRIVATE_OFFER'|'REQUEST_A_DEMO'|'PROMOTIONAL_MEDIA'|'FREE_TRIAL'|'QUICK_LAUNCH',
     *     Action: string,
     *     Rationale: string,
     *     Severity: 'BLOCKING'|'ADVISORY',
     *     Status: 'PASS'|'FAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
