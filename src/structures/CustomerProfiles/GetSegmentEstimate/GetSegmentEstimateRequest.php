<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $EstimateId
 */
class GetSegmentEstimateRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     EstimateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
