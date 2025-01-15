<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeFolderContents;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\FolderMetadata>|null $Folders
 * @property list<Shapes\DocumentMetadata>|null $Documents
 * @property string|null $Marker
 */
class DescribeFolderContentsResponse extends Response
{
}
