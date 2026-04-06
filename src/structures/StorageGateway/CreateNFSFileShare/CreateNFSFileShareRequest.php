<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateNFSFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\NFSFileShareDefaults|null $NFSFileShareDefaults
 * @property string $GatewayARN
 * @property 'SseS3'|'SseKms'|'DsseKms'|null $EncryptionType
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property string $Role
 * @property string $LocationARN
 * @property string|null $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null $ObjectACL
 * @property list<string>|null $ClientList
 * @property string|null $Squash
 * @property bool|null $ReadOnly
 * @property bool|null $GuessMIMETypeEnabled
 * @property bool|null $RequesterPays
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $FileShareName
 * @property Shapes\CacheAttributes|null $CacheAttributes
 * @property string|null $NotificationPolicy
 * @property string|null $VPCEndpointDNSName
 * @property string|null $BucketRegion
 * @property string|null $AuditDestinationARN
 */
class CreateNFSFileShareRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     NFSFileShareDefaults?: Shapes\NFSFileShareDefaults|null,
     *     GatewayARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms'|null,
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
     *     Role: string,
     *     LocationARN: string,
     *     DefaultStorageClass?: string|null,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null,
     *     ClientList?: list<string>|null,
     *     Squash?: string|null,
     *     ReadOnly?: bool|null,
     *     GuessMIMETypeEnabled?: bool|null,
     *     RequesterPays?: bool|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     FileShareName?: string|null,
     *     CacheAttributes?: Shapes\CacheAttributes|null,
     *     NotificationPolicy?: string|null,
     *     VPCEndpointDNSName?: string|null,
     *     BucketRegion?: string|null,
     *     AuditDestinationARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
