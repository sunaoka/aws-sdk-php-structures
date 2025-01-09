<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateStreamingDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamingDistributionConfig $StreamingDistributionConfig
 */
class CreateStreamingDistributionRequest extends Request
{
    /**
     * @param array{StreamingDistributionConfig: Shapes\StreamingDistributionConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
