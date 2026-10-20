<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PrepareMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServerlessCacheName
 * @property list<Shapes\CustomerNodeEndpoint> $CustomerNodeEndpointList
 * @property Shapes\SourceAuthenticationConfiguration|null $SourceAuthenticationConfiguration
 * @property Shapes\SourceTlsConfiguration|null $SourceTlsConfiguration
 */
class PrepareMigrationRequest extends Request
{
    /**
     * @param array{
     *     ServerlessCacheName: string,
     *     CustomerNodeEndpointList: list<Shapes\CustomerNodeEndpoint>,
     *     SourceAuthenticationConfiguration?: Shapes\SourceAuthenticationConfiguration|null,
     *     SourceTlsConfiguration?: Shapes\SourceTlsConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
