<?php

namespace Sunaoka\Aws\Structures\XRay\GetServiceGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string|null $GroupName
 * @property string|null $GroupARN
 * @property string|null $NextToken
 */
class GetServiceGraphRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     GroupName?: string|null,
     *     GroupARN?: string|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
