<?php

namespace Sunaoka\Aws\Structures\StorageGateway\AssociateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $Password
 * @property string $ClientToken
 * @property string $GatewayARN
 * @property string $LocationARN
 * @property list<Shapes\Tag> $Tags
 * @property string $AuditDestinationARN
 * @property Shapes\CacheAttributes $CacheAttributes
 * @property Shapes\EndpointNetworkConfiguration $EndpointNetworkConfiguration
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
     *     Tags?: list<Shapes\Tag>,
     *     AuditDestinationARN?: string,
     *     CacheAttributes?: Shapes\CacheAttributes,
     *     EndpointNetworkConfiguration?: Shapes\EndpointNetworkConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
