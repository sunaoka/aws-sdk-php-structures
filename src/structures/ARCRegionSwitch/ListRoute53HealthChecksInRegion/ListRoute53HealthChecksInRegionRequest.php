<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListRoute53HealthChecksInRegion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $hostedZoneId
 * @property string|null $recordName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListRoute53HealthChecksInRegionRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     hostedZoneId?: string|null,
     *     recordName?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
