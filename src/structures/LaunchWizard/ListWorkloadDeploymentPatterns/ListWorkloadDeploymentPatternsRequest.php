<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\ListWorkloadDeploymentPatterns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $workloadName
 */
class ListWorkloadDeploymentPatternsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     workloadName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
