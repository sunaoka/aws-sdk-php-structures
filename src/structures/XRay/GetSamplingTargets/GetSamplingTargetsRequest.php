<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SamplingStatisticsDocument> $SamplingStatisticsDocuments
 */
class GetSamplingTargetsRequest extends Request
{
    /**
     * @param array{SamplingStatisticsDocuments: list<Shapes\SamplingStatisticsDocument>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
