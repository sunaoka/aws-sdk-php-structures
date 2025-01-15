<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FileSystemAssociationARN
 * @property string|null $LocationARN
 * @property string|null $FileSystemAssociationStatus
 * @property string|null $AuditDestinationARN
 * @property string|null $GatewayARN
 * @property list<Tag>|null $Tags
 * @property CacheAttributes|null $CacheAttributes
 * @property EndpointNetworkConfiguration|null $EndpointNetworkConfiguration
 * @property list<FileSystemAssociationStatusDetail>|null $FileSystemAssociationStatusDetails
 */
class FileSystemAssociationInfo extends Shape
{
    /**
     * @param array{
     *     FileSystemAssociationARN?: string|null,
     *     LocationARN?: string|null,
     *     FileSystemAssociationStatus?: string|null,
     *     AuditDestinationARN?: string|null,
     *     GatewayARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     CacheAttributes?: CacheAttributes|null,
     *     EndpointNetworkConfiguration?: EndpointNetworkConfiguration|null,
     *     FileSystemAssociationStatusDetails?: list<FileSystemAssociationStatusDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
