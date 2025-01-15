<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeNFSFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NFSFileShareDefaults|null $NFSFileShareDefaults
 * @property string|null $FileShareARN
 * @property string|null $FileShareId
 * @property string|null $FileShareStatus
 * @property string|null $GatewayARN
 * @property 'SseS3'|'SseKms'|'DsseKms'|null $EncryptionType
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property string|null $Path
 * @property string|null $Role
 * @property string|null $LocationARN
 * @property string|null $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null $ObjectACL
 * @property list<string>|null $ClientList
 * @property string|null $Squash
 * @property bool|null $ReadOnly
 * @property bool|null $GuessMIMETypeEnabled
 * @property bool|null $RequesterPays
 * @property list<Tag>|null $Tags
 * @property string|null $FileShareName
 * @property CacheAttributes|null $CacheAttributes
 * @property string|null $NotificationPolicy
 * @property string|null $VPCEndpointDNSName
 * @property string|null $BucketRegion
 * @property string|null $AuditDestinationARN
 */
class NFSFileShareInfo extends Shape
{
    /**
     * @param array{
     *     NFSFileShareDefaults?: NFSFileShareDefaults|null,
     *     FileShareARN?: string|null,
     *     FileShareId?: string|null,
     *     FileShareStatus?: string|null,
     *     GatewayARN?: string|null,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms'|null,
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
     *     Path?: string|null,
     *     Role?: string|null,
     *     LocationARN?: string|null,
     *     DefaultStorageClass?: string|null,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null,
     *     ClientList?: list<string>|null,
     *     Squash?: string|null,
     *     ReadOnly?: bool|null,
     *     GuessMIMETypeEnabled?: bool|null,
     *     RequesterPays?: bool|null,
     *     Tags?: list<Tag>|null,
     *     FileShareName?: string|null,
     *     CacheAttributes?: CacheAttributes|null,
     *     NotificationPolicy?: string|null,
     *     VPCEndpointDNSName?: string|null,
     *     BucketRegion?: string|null,
     *     AuditDestinationARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
