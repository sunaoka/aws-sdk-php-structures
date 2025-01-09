<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetStreamingDistributionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetStreamingDistributionConfigRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
