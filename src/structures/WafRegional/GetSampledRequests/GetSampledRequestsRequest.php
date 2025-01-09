<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetSampledRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAclId
 * @property string $RuleId
 * @property Shapes\TimeWindow $TimeWindow
 * @property int $MaxItems
 */
class GetSampledRequestsRequest extends Request
{
    /**
     * @param array{
     *     WebAclId: string,
     *     RuleId: string,
     *     TimeWindow: Shapes\TimeWindow,
     *     MaxItems: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
