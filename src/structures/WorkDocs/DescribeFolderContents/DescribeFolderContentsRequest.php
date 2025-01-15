<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeFolderContents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $FolderId
 * @property 'DATE'|'NAME'|null $Sort
 * @property 'ASCENDING'|'DESCENDING'|null $Order
 * @property int<1, 999>|null $Limit
 * @property string|null $Marker
 * @property 'ALL'|'DOCUMENT'|'FOLDER'|null $Type
 * @property string|null $Include
 */
class DescribeFolderContentsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     FolderId: string,
     *     Sort?: 'DATE'|'NAME'|null,
     *     Order?: 'ASCENDING'|'DESCENDING'|null,
     *     Limit?: int<1, 999>|null,
     *     Marker?: string|null,
     *     Type?: 'ALL'|'DOCUMENT'|'FOLDER'|null,
     *     Include?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
