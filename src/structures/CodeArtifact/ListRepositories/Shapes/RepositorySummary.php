<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $administratorAccount
 * @property string $domainName
 * @property string $domainOwner
 * @property string $arn
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdTime
 */
class RepositorySummary extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     administratorAccount?: string,
     *     domainName?: string,
     *     domainOwner?: string,
     *     arn?: string,
     *     description?: string,
     *     createdTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
