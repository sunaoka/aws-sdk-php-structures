<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentEstimate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\SegmentGroupStructure|null $SegmentQuery
 * @property string|null $SegmentSqlQuery
 */
class CreateSegmentEstimateRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentQuery?: Shapes\SegmentGroupStructure|null,
     *     SegmentSqlQuery?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
