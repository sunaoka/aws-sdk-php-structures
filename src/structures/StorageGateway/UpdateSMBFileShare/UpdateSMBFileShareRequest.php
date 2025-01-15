<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property 'SseS3'|'SseKms'|'DsseKms'|null $EncryptionType
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
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
 * @property 'ClientSpecified'|'CaseSensitive'|null $CaseSensitivity
 * @property string|null $FileShareName
 * @property Shapes\CacheAttributes|null $CacheAttributes
 * @property string|null $NotificationPolicy
 * @property bool|null $OplocksEnabled
 */
class UpdateSMBFileShareRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms'|null,
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
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
     *     CaseSensitivity?: 'ClientSpecified'|'CaseSensitive'|null,
     *     FileShareName?: string|null,
     *     CacheAttributes?: Shapes\CacheAttributes|null,
     *     NotificationPolicy?: string|null,
     *     OplocksEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
