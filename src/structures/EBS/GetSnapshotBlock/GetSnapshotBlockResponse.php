<?php

namespace Sunaoka\Aws\Structures\EBS\GetSnapshotBlock;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $DataLength
 * @property \Psr\Http\Message\StreamInterface $BlockData
 * @property string|null $Checksum
 * @property 'SHA256'|null $ChecksumAlgorithm
 */
class GetSnapshotBlockResponse extends Response
{
}
