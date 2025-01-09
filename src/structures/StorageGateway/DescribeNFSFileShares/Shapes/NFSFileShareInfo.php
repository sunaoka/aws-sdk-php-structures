<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeNFSFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NFSFileShareDefaults $NFSFileShareDefaults
 * @property string $FileShareARN
 * @property string $FileShareId
 * @property string $FileShareStatus
 * @property string $GatewayARN
 * @property 'SseS3'|'SseKms'|'DsseKms' $EncryptionType
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property string $Path
 * @property string $Role
 * @property string $LocationARN
 * @property string $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read' $ObjectACL
 * @property list<string> $ClientList
 * @property string $Squash
 * @property bool $ReadOnly
 * @property bool $GuessMIMETypeEnabled
 * @property bool $RequesterPays
 * @property list<Tag> $Tags
 * @property string $FileShareName
 * @property CacheAttributes $CacheAttributes
 * @property string $NotificationPolicy
 * @property string $VPCEndpointDNSName
 * @property string $BucketRegion
 * @property string $AuditDestinationARN
 */
class NFSFileShareInfo extends Shape
{
    /**
     * @param array{
     *     NFSFileShareDefaults?: NFSFileShareDefaults,
     *     FileShareARN?: string,
     *     FileShareId?: string,
     *     FileShareStatus?: string,
     *     GatewayARN?: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms',
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
     *     Path?: string,
     *     Role?: string,
     *     LocationARN?: string,
     *     DefaultStorageClass?: string,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read',
     *     ClientList?: list<string>,
     *     Squash?: string,
     *     ReadOnly?: bool,
     *     GuessMIMETypeEnabled?: bool,
     *     RequesterPays?: bool,
     *     Tags?: list<Tag>,
     *     FileShareName?: string,
     *     CacheAttributes?: CacheAttributes,
     *     NotificationPolicy?: string,
     *     VPCEndpointDNSName?: string,
     *     BucketRegion?: string,
     *     AuditDestinationARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
