<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
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
 * @property list<Tag>|null $Tags
 * @property string|null $FileShareName
 * @property CacheAttributes|null $CacheAttributes
 * @property string|null $NotificationPolicy
 * @property string|null $VPCEndpointDNSName
 * @property string|null $BucketRegion
 * @property bool|null $OplocksEnabled
 */
class SMBFileShareInfo extends Shape
{
    /**
     * @param array{
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
     *     Tags?: list<Tag>|null,
     *     FileShareName?: string|null,
     *     CacheAttributes?: CacheAttributes|null,
     *     NotificationPolicy?: string|null,
     *     VPCEndpointDNSName?: string|null,
     *     BucketRegion?: string|null,
     *     OplocksEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
