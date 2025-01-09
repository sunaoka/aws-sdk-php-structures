<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateStreamingDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StreamingDistributionConfig $StreamingDistributionConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateStreamingDistributionRequest extends Request
{
    /**
     * @param array{
     *     StreamingDistributionConfig: Shapes\StreamingDistributionConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
