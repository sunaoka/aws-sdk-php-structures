<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssociateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $Password
 * @property string $ClientToken
 * @property string $GatewayARN
 * @property string $LocationARN
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $AuditDestinationARN
 * @property Shapes\CacheAttributes|null $CacheAttributes
 * @property Shapes\EndpointNetworkConfiguration|null $EndpointNetworkConfiguration
 */
class AssociateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     Password: string,
     *     ClientToken: string,
     *     GatewayARN: string,
     *     LocationARN: string,
     *     Tags?: list<Shapes\Tag>|null,
     *     AuditDestinationARN?: string|null,
     *     CacheAttributes?: Shapes\CacheAttributes|null,
     *     EndpointNetworkConfiguration?: Shapes\EndpointNetworkConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
