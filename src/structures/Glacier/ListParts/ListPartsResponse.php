<?php

namespace Sunaoka\Aws\Structures\Glacier\ListParts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $MultipartUploadId
 * @property string $VaultARN
 * @property string $ArchiveDescription
 * @property int $PartSizeInBytes
 * @property string $CreationDate
 * @property list<Shapes\PartListElement> $Parts
 * @property string $Marker
 */
class ListPartsResponse extends Response
{
}
