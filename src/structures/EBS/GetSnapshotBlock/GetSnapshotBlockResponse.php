<?php

namespace Sunaoka\Aws\Structures\EBS\GetSnapshotBlock;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $DataLength
 * @property \Psr\Http\Message\StreamInterface $BlockData
 * @property string $Checksum
 * @property 'SHA256' $ChecksumAlgorithm
 */
class GetSnapshotBlockResponse extends Response
{
}
