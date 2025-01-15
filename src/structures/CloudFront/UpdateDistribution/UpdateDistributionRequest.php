<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DistributionConfig $DistributionConfig
 * @property string $Id
 * @property string|null $IfMatch
 */
class UpdateDistributionRequest extends Request
{
    /**
     * @param array{
     *     DistributionConfig: Shapes\DistributionConfig,
     *     Id: string,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
