<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\ListEntitiesDetectionV2Jobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ComprehendMedicalAsyncJobFilter $Filter
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListEntitiesDetectionV2JobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ComprehendMedicalAsyncJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
