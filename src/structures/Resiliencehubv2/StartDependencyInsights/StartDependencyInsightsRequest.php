<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\StartDependencyInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string|null $clientToken
 */
class StartDependencyInsightsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
