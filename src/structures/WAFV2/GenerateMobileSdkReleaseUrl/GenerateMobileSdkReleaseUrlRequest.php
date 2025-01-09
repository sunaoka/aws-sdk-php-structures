<?php

namespace Sunaoka\Aws\Structures\WAFV2\GenerateMobileSdkReleaseUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'IOS'|'ANDROID' $Platform
 * @property string $ReleaseVersion
 */
class GenerateMobileSdkReleaseUrlRequest extends Request
{
    /**
     * @param array{
     *     Platform: 'IOS'|'ANDROID',
     *     ReleaseVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
