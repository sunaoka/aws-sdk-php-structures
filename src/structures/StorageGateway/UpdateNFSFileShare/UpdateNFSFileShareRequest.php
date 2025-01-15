<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateNFSFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property 'SseS3'|'SseKms'|'DsseKms'|null $EncryptionType
 * @property bool|null $KMSEncrypted
 * @property string|null $KMSKey
 * @property Shapes\NFSFileShareDefaults|null $NFSFileShareDefaults
 * @property string|null $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null $ObjectACL
 * @property list<string>|null $ClientList
 * @property string|null $Squash
 * @property bool|null $ReadOnly
 * @property bool|null $GuessMIMETypeEnabled
 * @property bool|null $RequesterPays
 * @property string|null $FileShareName
 * @property Shapes\CacheAttributes|null $CacheAttributes
 * @property string|null $NotificationPolicy
 * @property string|null $AuditDestinationARN
 */
class UpdateNFSFileShareRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms'|null,
     *     KMSEncrypted?: bool|null,
     *     KMSKey?: string|null,
     *     NFSFileShareDefaults?: Shapes\NFSFileShareDefaults|null,
     *     DefaultStorageClass?: string|null,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read'|null,
     *     ClientList?: list<string>|null,
     *     Squash?: string|null,
     *     ReadOnly?: bool|null,
     *     GuessMIMETypeEnabled?: bool|null,
     *     RequesterPays?: bool|null,
     *     FileShareName?: string|null,
     *     CacheAttributes?: Shapes\CacheAttributes|null,
     *     NotificationPolicy?: string|null,
     *     AuditDestinationARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
