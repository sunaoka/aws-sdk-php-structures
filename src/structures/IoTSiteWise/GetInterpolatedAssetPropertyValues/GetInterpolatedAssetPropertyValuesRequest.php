<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property int $startTimeInSeconds
 * @property int $startTimeOffsetInNanos
 * @property int $endTimeInSeconds
 * @property int $endTimeOffsetInNanos
 * @property 'GOOD'|'BAD'|'UNCERTAIN' $quality
 * @property int $intervalInSeconds
 * @property string $nextToken
 * @property int $maxResults
 * @property string $type
 * @property int $intervalWindowInSeconds
 */
class GetInterpolatedAssetPropertyValuesRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     startTimeInSeconds: int,
     *     startTimeOffsetInNanos?: int,
     *     endTimeInSeconds: int,
     *     endTimeOffsetInNanos?: int,
     *     quality: 'GOOD'|'BAD'|'UNCERTAIN',
     *     intervalInSeconds: int,
     *     nextToken?: string,
     *     maxResults?: int,
     *     type: string,
     *     intervalWindowInSeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
