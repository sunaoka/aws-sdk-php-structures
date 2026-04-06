<?php

namespace Sunaoka\Aws\Structures\BackupStorage\NotifyObjectComplete;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 * @property string $UploadId
 * @property string $ObjectChecksum
 * @property 'SUMMARY' $ObjectChecksumAlgorithm
 * @property string|null $MetadataString
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $MetadataBlob
 * @property int|null $MetadataBlobLength
 * @property string|null $MetadataBlobChecksum
 * @property 'SHA256'|null $MetadataBlobChecksumAlgorithm
 */
class NotifyObjectCompleteRequest extends Request
{
    /**
     * @param array{
     *     BackupJobId: string,
     *     UploadId: string,
     *     ObjectChecksum: string,
     *     ObjectChecksumAlgorithm: 'SUMMARY',
     *     MetadataString?: string|null,
     *     MetadataBlob?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     MetadataBlobLength?: int|null,
     *     MetadataBlobChecksum?: string|null,
     *     MetadataBlobChecksumAlgorithm?: 'SHA256'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
