<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetDependencyInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 */
class GetDependencyInsightsRequest extends Request
{
    /**
     * @param array{serviceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
