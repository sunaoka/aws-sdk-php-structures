<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DistributionConfig $DistributionConfig
 */
class CreateDistributionRequest extends Request
{
    /**
     * @param array{DistributionConfig: Shapes\DistributionConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
