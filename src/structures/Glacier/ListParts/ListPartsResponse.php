<?php

namespace Sunaoka\Aws\Structures\Glacier\ListParts;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $MultipartUploadId
 * @property string|null $VaultARN
 * @property string|null $ArchiveDescription
 * @property int|null $PartSizeInBytes
 * @property string|null $CreationDate
 * @property list<Shapes\PartListElement>|null $Parts
 * @property string|null $Marker
 */
class ListPartsResponse extends Response
{
}
