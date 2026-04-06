<?php

namespace Sunaoka\Aws\Structures\BackupStorage\GetChunk;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Psr\Http\Message\StreamInterface $Data
 * @property int $Length
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 */
class GetChunkResponse extends Response
{
}
