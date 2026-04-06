<?php

namespace Sunaoka\Aws\Structures\BackupStorage\GetObjectMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MetadataString
 * @property \Psr\Http\Message\StreamInterface $MetadataBlob
 * @property int|null $MetadataBlobLength
 * @property string|null $MetadataBlobChecksum
 * @property 'SHA256'|null $MetadataBlobChecksumAlgorithm
 */
class GetObjectMetadataResponse extends Response
{
}
