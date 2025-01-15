<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $assetId
 * @property string|null $propertyId
 * @property string|null $propertyAlias
 * @property int<1, 9223372036854774> $startTimeInSeconds
 * @property int<0, 999999999>|null $startTimeOffsetInNanos
 * @property int<1, 9223372036854774> $endTimeInSeconds
 * @property int<0, 999999999>|null $endTimeOffsetInNanos
 * @property 'GOOD'|'BAD'|'UNCERTAIN' $quality
 * @property int<1, 320000000> $intervalInSeconds
 * @property string|null $nextToken
 * @property int<1, max>|null $maxResults
 * @property string $type
 * @property int<1, 320000000>|null $intervalWindowInSeconds
 */
class GetInterpolatedAssetPropertyValuesRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string|null,
     *     propertyId?: string|null,
     *     propertyAlias?: string|null,
     *     startTimeInSeconds: int<1, 9223372036854774>,
     *     startTimeOffsetInNanos?: int<0, 999999999>|null,
     *     endTimeInSeconds: int<1, 9223372036854774>,
     *     endTimeOffsetInNanos?: int<0, 999999999>|null,
     *     quality: 'GOOD'|'BAD'|'UNCERTAIN',
     *     intervalInSeconds: int<1, 320000000>,
     *     nextToken?: string|null,
     *     maxResults?: int<1, max>|null,
     *     type: string,
     *     intervalWindowInSeconds?: int<1, 320000000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
