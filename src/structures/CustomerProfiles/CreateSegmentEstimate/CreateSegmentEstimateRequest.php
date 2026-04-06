<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\SegmentGroupStructure $SegmentQuery
 */
class CreateSegmentEstimateRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentQuery: Shapes\SegmentGroupStructure
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
