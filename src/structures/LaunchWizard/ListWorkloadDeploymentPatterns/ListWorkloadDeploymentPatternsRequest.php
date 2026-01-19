<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloadDeploymentPatterns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListWorkloadDeploymentPatternsRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
