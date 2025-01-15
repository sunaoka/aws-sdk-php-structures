<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property string|null $assetId
 * @property string|null $aliasPrefix
 * @property 'ASSOCIATED'|'DISASSOCIATED'|null $timeSeriesType
 */
class ListTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     assetId?: string|null,
     *     aliasPrefix?: string|null,
     *     timeSeriesType?: 'ASSOCIATED'|'DISASSOCIATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
