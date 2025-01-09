<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListMobileSdkReleases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IOS'|'ANDROID' $Platform
 * @property string $NextMarker
 * @property int<1, 100> $Limit
 */
class ListMobileSdkReleasesRequest extends Request
{
    /**
     * @param array{
     *     Platform: 'IOS'|'ANDROID',
     *     NextMarker?: string,
     *     Limit?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
