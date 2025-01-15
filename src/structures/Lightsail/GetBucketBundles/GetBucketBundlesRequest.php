<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketBundles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeInactive
 */
class GetBucketBundlesRequest extends Request
{
    /**
     * @param array{includeInactive?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
