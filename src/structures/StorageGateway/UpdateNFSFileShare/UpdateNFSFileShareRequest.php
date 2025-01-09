<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateNFSFileShare;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileShareARN
 * @property 'SseS3'|'SseKms'|'DsseKms' $EncryptionType
 * @property bool $KMSEncrypted
 * @property string $KMSKey
 * @property Shapes\NFSFileShareDefaults $NFSFileShareDefaults
 * @property string $DefaultStorageClass
 * @property 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read' $ObjectACL
 * @property list<string> $ClientList
 * @property string $Squash
 * @property bool $ReadOnly
 * @property bool $GuessMIMETypeEnabled
 * @property bool $RequesterPays
 * @property string $FileShareName
 * @property Shapes\CacheAttributes $CacheAttributes
 * @property string $NotificationPolicy
 * @property string $AuditDestinationARN
 */
class UpdateNFSFileShareRequest extends Request
{
    /**
     * @param array{
     *     FileShareARN: string,
     *     EncryptionType?: 'SseS3'|'SseKms'|'DsseKms',
     *     KMSEncrypted?: bool,
     *     KMSKey?: string,
     *     NFSFileShareDefaults?: Shapes\NFSFileShareDefaults,
     *     DefaultStorageClass?: string,
     *     ObjectACL?: 'private'|'public-read'|'public-read-write'|'authenticated-read'|'bucket-owner-read'|'bucket-owner-full-control'|'aws-exec-read',
     *     ClientList?: list<string>,
     *     Squash?: string,
     *     ReadOnly?: bool,
     *     GuessMIMETypeEnabled?: bool,
     *     RequesterPays?: bool,
     *     FileShareName?: string,
     *     CacheAttributes?: Shapes\CacheAttributes,
     *     NotificationPolicy?: string,
     *     AuditDestinationARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
