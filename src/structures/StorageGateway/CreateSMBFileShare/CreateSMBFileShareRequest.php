<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSMBFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GatewayARN
 * @property 'SseS3'|'SseKms'|'DsseKms'|null $EncryptionType
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property string $Role
 * @property string $LocationARN
 * @property string|null $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null $ObjectACL
 * @property bool|null $ReadOnly
 * @property bool|null $GuessMIMETypeEnabled
 * @property bool|null $RequesterPays
 * @property bool|null $SMBACLEnabled
 * @property bool|null $AccessBasedEnumeration
 * @property list<string>|null $AdminUserList
 * @property list<string>|null $ValidUserList
 * @property list<string>|null $InvalidUserList
 * @property string|null $AuditDestinationARN
 * @property string|null $Authentication
 * @property 'ClientSpecified'|'CaseSensitive'|null $CaseSensitivity
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $FileShareName
 * @property Shapes\CacheAttributes|null $CacheAttributes
 * @property string|null $NotificationPolicy
 * @property string|null $VPCEndpointDNSName
 * @property string|null $BucketRegion
 * @property bool|null $OplocksEnabled
 */
class CreateSMBFileShareRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     GatewayARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms'|null,
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
     *     Role: string,
     *     LocationARN: string,
     *     DefaultStorageClass?: string|null,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null,
     *     ReadOnly?: bool|null,
     *     GuessMIMETypeEnabled?: bool|null,
     *     RequesterPays?: bool|null,
     *     SMBACLEnabled?: bool|null,
     *     AccessBasedEnumeration?: bool|null,
     *     AdminUserList?: list<string>|null,
     *     ValidUserList?: list<string>|null,
     *     InvalidUserList?: list<string>|null,
     *     AuditDestinationARN?: string|null,
     *     Authentication?: string|null,
     *     CaseSensitivity?: 'ClientSpecified'|'CaseSensitive'|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     FileShareName?: string|null,
     *     CacheAttributes?: Shapes\CacheAttributes|null,
     *     NotificationPolicy?: string|null,
     *     VPCEndpointDNSName?: string|null,
     *     BucketRegion?: string|null,
     *     OplocksEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
