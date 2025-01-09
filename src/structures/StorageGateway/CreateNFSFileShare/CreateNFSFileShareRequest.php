<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateNFSFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\NFSFileShareDefaults $NFSFileShareDefaults
 * @property string $GatewayARN
 * @property 'SseS3'|'SseKms'|'DsseKms' $EncryptionType
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property string $Role
 * @property string $LocationARN
 * @property string $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read' $ObjectACL
 * @property list<string> $ClientList
 * @property string $Squash
 * @property bool $ReadOnly
 * @property bool $GuessMIMETypeEnabled
 * @property bool $RequesterPays
 * @property list<Shapes\Tag> $Tags
 * @property string $FileShareName
 * @property Shapes\CacheAttributes $CacheAttributes
 * @property string $NotificationPolicy
 * @property string $VPCEndpointDNSName
 * @property string $BucketRegion
 * @property string $AuditDestinationARN
 */
class CreateNFSFileShareRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     NFSFileShareDefaults?: Shapes\NFSFileShareDefaults,
     *     GatewayARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms',
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
     *     Role: string,
     *     LocationARN: string,
     *     DefaultStorageClass?: string,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read',
     *     ClientList?: list<string>,
     *     Squash?: string,
     *     ReadOnly?: bool,
     *     GuessMIMETypeEnabled?: bool,
     *     RequesterPays?: bool,
     *     Tags?: list<Shapes\Tag>,
     *     FileShareName?: string,
     *     CacheAttributes?: Shapes\CacheAttributes,
     *     NotificationPolicy?: string,
     *     VPCEndpointDNSName?: string,
     *     BucketRegion?: string,
     *     AuditDestinationARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
