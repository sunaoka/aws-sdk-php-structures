<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistributionBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $distributionName
 * @property string|null $bundleId
 */
class UpdateDistributionBundleRequest extends Request
{
    /**
     * @param array{
     *     distributionName?: string|null,
     *     bundleId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
