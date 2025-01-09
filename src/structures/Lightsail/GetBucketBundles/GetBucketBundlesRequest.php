<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeInactive
 */
class GetBucketBundlesRequest extends Request
{
    /**
     * @param array{includeInactive?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
