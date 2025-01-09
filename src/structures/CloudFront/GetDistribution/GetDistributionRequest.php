<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetDistributionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
