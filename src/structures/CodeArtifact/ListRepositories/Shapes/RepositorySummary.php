<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\ListRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $administratorAccount
 * @property string|null $domainName
 * @property string|null $domainOwner
 * @property string|null $arn
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdTime
 */
class RepositorySummary extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     administratorAccount?: string|null,
     *     domainName?: string|null,
     *     domainOwner?: string|null,
     *     arn?: string|null,
     *     description?: string|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
