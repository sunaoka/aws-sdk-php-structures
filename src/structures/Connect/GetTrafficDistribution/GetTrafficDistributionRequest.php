<?php

namespace Sunaoka\Aws\Structures\Connect\GetTrafficDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetTrafficDistributionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
