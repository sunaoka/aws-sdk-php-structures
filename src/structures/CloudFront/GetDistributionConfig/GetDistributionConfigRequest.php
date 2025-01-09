<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetDistributionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetDistributionConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
