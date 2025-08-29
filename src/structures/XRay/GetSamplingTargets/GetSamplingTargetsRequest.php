<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SamplingStatisticsDocument> $SamplingStatisticsDocuments
 * @property list<Shapes\SamplingBoostStatisticsDocument>|null $SamplingBoostStatisticsDocuments
 */
class GetSamplingTargetsRequest extends Request
{
    /**
     * @param array{
     *     SamplingStatisticsDocuments: list<Shapes\SamplingStatisticsDocument>,
     *     SamplingBoostStatisticsDocuments?: list<Shapes\SamplingBoostStatisticsDocument>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
