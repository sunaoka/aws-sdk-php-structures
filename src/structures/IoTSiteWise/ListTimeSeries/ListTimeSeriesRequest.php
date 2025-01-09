<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property string $assetId
 * @property string $aliasPrefix
 * @property 'ASSOCIATED'|'DISASSOCIATED' $timeSeriesType
 */
class ListTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     assetId?: string,
     *     aliasPrefix?: string,
     *     timeSeriesType?: 'ASSOCIATED'|'DISASSOCIATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
