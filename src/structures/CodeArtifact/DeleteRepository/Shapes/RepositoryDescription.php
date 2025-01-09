<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\DeleteRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $administratorAccount
 * @property string $domainName
 * @property string $domainOwner
 * @property string $arn
 * @property string $description
 * @property list<UpstreamRepositoryInfo> $upstreams
 * @property list<RepositoryExternalConnectionInfo> $externalConnections
 * @property \Aws\Api\DateTimeResult $createdTime
 */
class RepositoryDescription extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     administratorAccount?: string,
     *     domainName?: string,
     *     domainOwner?: string,
     *     arn?: string,
     *     description?: string,
     *     upstreams?: list<UpstreamRepositoryInfo>,
     *     externalConnections?: list<RepositoryExternalConnectionInfo>,
     *     createdTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
