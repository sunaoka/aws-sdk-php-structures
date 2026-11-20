<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\GetRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3SynchronizedSource|null $s3
 * @property GitHubSynchronizedSource|null $gitHub
 */
class RegistryRecordSynchronizedSource extends Shape
{
    /**
     * @param array{
     *     s3?: S3SynchronizedSource|null,
     *     gitHub?: GitHubSynchronizedSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
