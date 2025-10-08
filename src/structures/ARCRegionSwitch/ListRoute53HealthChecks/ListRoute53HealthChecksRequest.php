<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListRoute53HealthChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $hostedZoneId
 * @property string|null $recordName
 * @property int<10, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListRoute53HealthChecksRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     hostedZoneId?: string|null,
     *     recordName?: string|null,
     *     maxResults?: int<10, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
