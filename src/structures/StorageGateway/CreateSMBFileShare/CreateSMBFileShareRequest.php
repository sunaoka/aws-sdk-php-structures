<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSMBFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GatewayARN
 * @property 'SseS3'|'SseKms'|'DsseKms' $EncryptionType
 * @property bool $KMSEncrypted
 * @property string $KMSKey
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
 * @property list<Shapes\Tag> $Tags
 * @property string $FileShareName
 * @property Shapes\CacheAttributes $CacheAttributes
 * @property string $NotificationPolicy
 * @property string $VPCEndpointDNSName
 * @property string $BucketRegion
 * @property bool $OplocksEnabled
 */
class CreateSMBFileShareRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     GatewayARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms',
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
     *     Role: string,
     *     LocationARN: string,
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
     *     Tags?: list<Shapes\Tag>,
     *     FileShareName?: string,
     *     CacheAttributes?: Shapes\CacheAttributes,
     *     NotificationPolicy?: string,
     *     VPCEndpointDNSName?: string,
     *     BucketRegion?: string,
     *     OplocksEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
