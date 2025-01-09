<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistributionBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property string $bundleId
 */
class UpdateDistributionBundleRequest extends Request
{
    /**
     * @param array{
     *     distributionName?: string,
     *     bundleId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
