<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListMobileSdkReleases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IOS'|'ANDROID' $Platform
 * @property string $NextMarker
 * @property int $Limit
 */
class ListMobileSdkReleasesRequest extends Request
{
    /**
     * @param array{
     *     Platform: 'IOS'|'ANDROID',
     *     NextMarker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
