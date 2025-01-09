<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetInterpolatedAssetPropertyValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assetId
 * @property string $propertyId
 * @property string $propertyAlias
 * @property int<1, 9223372036854774> $startTimeInSeconds
 * @property int<0, 999999999> $startTimeOffsetInNanos
 * @property int<1, 9223372036854774> $endTimeInSeconds
 * @property int<0, 999999999> $endTimeOffsetInNanos
 * @property 'GOOD'|'BAD'|'UNCERTAIN' $quality
 * @property int<1, 320000000> $intervalInSeconds
 * @property string $nextToken
 * @property int<1, max> $maxResults
 * @property string $type
 * @property int<1, 320000000> $intervalWindowInSeconds
 */
class GetInterpolatedAssetPropertyValuesRequest extends Request
{
    /**
     * @param array{
     *     assetId?: string,
     *     propertyId?: string,
     *     propertyAlias?: string,
     *     startTimeInSeconds: int<1, 9223372036854774>,
     *     startTimeOffsetInNanos?: int<0, 999999999>,
     *     endTimeInSeconds: int<1, 9223372036854774>,
     *     endTimeOffsetInNanos?: int<0, 999999999>,
     *     quality: 'GOOD'|'BAD'|'UNCERTAIN',
     *     intervalInSeconds: int<1, 320000000>,
     *     nextToken?: string,
     *     maxResults?: int<1, max>,
     *     type: string,
     *     intervalWindowInSeconds?: int<1, 320000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
