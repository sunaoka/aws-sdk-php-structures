<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemAssociationARN
 * @property string $LocationARN
 * @property string $FileSystemAssociationStatus
 * @property string $AuditDestinationARN
 * @property string $GatewayARN
 * @property list<Tag> $Tags
 * @property CacheAttributes $CacheAttributes
 * @property EndpointNetworkConfiguration $EndpointNetworkConfiguration
 * @property list<FileSystemAssociationStatusDetail> $FileSystemAssociationStatusDetails
 */
class FileSystemAssociationInfo extends Shape
{
    /**
     * @param array{
     *     FileSystemAssociationARN?: string,
     *     LocationARN?: string,
     *     FileSystemAssociationStatus?: string,
     *     AuditDestinationARN?: string,
     *     GatewayARN?: string,
     *     Tags?: list<Tag>,
     *     CacheAttributes?: CacheAttributes,
     *     EndpointNetworkConfiguration?: EndpointNetworkConfiguration,
     *     FileSystemAssociationStatusDetails?: list<FileSystemAssociationStatusDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
