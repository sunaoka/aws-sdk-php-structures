<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $url
 * @property \Aws\Api\DateTimeResult $synchronizedAt
 * @property string $commitId
 */
class GitHubSynchronizedSource extends Shape
{
    /**
     * @param array{
     *     url: string,
     *     synchronizedAt: \Aws\Api\DateTimeResult,
     *     commitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
