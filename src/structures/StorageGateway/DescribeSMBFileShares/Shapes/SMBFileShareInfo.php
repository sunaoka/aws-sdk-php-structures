<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
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
 * @property bool $ReadOnly
 * @property bool $GuessMIMETypeEnabled
 * @property bool $RequesterPays
 * @property bool $SMBACLEnabled
 * @property bool $AccessBasedEnumeration
 * @property list<string> $AdminUserList
 * @property list<string> $ValidUserList
 * @property list<string> $InvalidUserList
 * @property string $AuditDestinationARN
 * @property string $Authentication
 * @property 'ClientSpecified'|'CaseSensitive' $CaseSensitivity
 * @property list<Tag> $Tags
 * @property string $FileShareName
 * @property CacheAttributes $CacheAttributes
 * @property string $NotificationPolicy
 * @property string $VPCEndpointDNSName
 * @property string $BucketRegion
 * @property bool $OplocksEnabled
 */
class SMBFileShareInfo extends Shape
{
    /**
     * @param array{
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
     *     ReadOnly?: bool,
     *     GuessMIMETypeEnabled?: bool,
     *     RequesterPays?: bool,
     *     SMBACLEnabled?: bool,
     *     AccessBasedEnumeration?: bool,
     *     AdminUserList?: list<string>,
     *     ValidUserList?: list<string>,
     *     InvalidUserList?: list<string>,
     *     AuditDestinationARN?: string,
     *     Authentication?: string,
     *     CaseSensitivity?: 'ClientSpecified'|'CaseSensitive',
     *     Tags?: list<Tag>,
     *     FileShareName?: string,
     *     CacheAttributes?: CacheAttributes,
     *     NotificationPolicy?: string,
     *     VPCEndpointDNSName?: string,
     *     BucketRegion?: string,
     *     OplocksEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
