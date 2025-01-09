<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property 'SseS3'|'SseKms'|'DsseKms' $EncryptionType
 * @property bool $KMSEncrypted
 * @property string $KMSKey
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
 * @property 'ClientSpecified'|'CaseSensitive' $CaseSensitivity
 * @property string $FileShareName
 * @property Shapes\CacheAttributes $CacheAttributes
 * @property string $NotificationPolicy
 * @property bool $OplocksEnabled
 */
class UpdateSMBFileShareRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms',
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
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
     *     CaseSensitivity?: 'ClientSpecified'|'CaseSensitive',
     *     FileShareName?: string,
     *     CacheAttributes?: Shapes\CacheAttributes,
     *     NotificationPolicy?: string,
     *     OplocksEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
