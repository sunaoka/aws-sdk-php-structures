<?php

namespace Sunaoka\Aws\Structures\CodeArtifact\AssociateExternalConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $administratorAccount
 * @property string|null $domainName
 * @property string|null $domainOwner
 * @property string|null $arn
 * @property string|null $description
 * @property list<UpstreamRepositoryInfo>|null $upstreams
 * @property list<RepositoryExternalConnectionInfo>|null $externalConnections
 * @property \Aws\Api\DateTimeResult|null $createdTime
 */
class RepositoryDescription extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     administratorAccount?: string|null,
     *     domainName?: string|null,
     *     domainOwner?: string|null,
     *     arn?: string|null,
     *     description?: string|null,
     *     upstreams?: list<UpstreamRepositoryInfo>|null,
     *     externalConnections?: list<RepositoryExternalConnectionInfo>|null,
     *     createdTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
