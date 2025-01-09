<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 */
class DeleteDistributionRequest extends Request
{
    /**
     * @param array{distributionName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
