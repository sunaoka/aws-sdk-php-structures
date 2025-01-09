<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetSampledRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebAclId
 * @property string $RuleId
 * @property Shapes\TimeWindow $TimeWindow
 * @property int<1, 500> $MaxItems
 */
class GetSampledRequestsRequest extends Request
{
    /**
     * @param array{
     *     WebAclId: string,
     *     RuleId: string,
     *     TimeWindow: Shapes\TimeWindow,
     *     MaxItems: int<1, 500>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
