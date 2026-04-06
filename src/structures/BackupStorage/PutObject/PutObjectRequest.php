<?php

namespace Sunaoka\Aws\Structures\BackupStorage\PutObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupJobId
 * @property string $ObjectName
 * @property string|null $MetadataString
 * @property string|resource|\Psr\Http\Message\StreamInterface|null $InlineChunk
 * @property int|null $InlineChunkLength
 * @property string|null $InlineChunkChecksum
 * @property string|null $InlineChunkChecksumAlgorithm
 * @property string|null $ObjectChecksum
 * @property 'SUMMARY'|null $ObjectChecksumAlgorithm
 * @property bool|null $ThrowOnDuplicate
 */
class PutObjectRequest extends Request
{
    /**
     * @param array{
     *     BackupJobId: string,
     *     ObjectName: string,
     *     MetadataString?: string|null,
     *     InlineChunk?: string|resource|\Psr\Http\Message\StreamInterface|null,
     *     InlineChunkLength?: int|null,
     *     InlineChunkChecksum?: string|null,
     *     InlineChunkChecksumAlgorithm?: string|null,
     *     ObjectChecksum?: string|null,
     *     ObjectChecksumAlgorithm?: 'SUMMARY'|null,
     *     ThrowOnDuplicate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
