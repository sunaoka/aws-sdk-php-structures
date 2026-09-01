<?php

namespace Sunaoka\Aws\Structures\Support\GetAttachmentUploadLinks;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $uploadId
 * @property int<1, 104857600> $partSizeBytes
 * @property int $totalParts
 * @property int|null $nextIndex
 * @property list<Shapes\UploadUrl> $uploadUrls
 */
class GetAttachmentUploadLinksResponse extends Response
{
}
