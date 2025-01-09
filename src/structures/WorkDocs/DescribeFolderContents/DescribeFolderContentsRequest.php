<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeFolderContents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $FolderId
 * @property 'DATE'|'NAME' $Sort
 * @property 'ASCENDING'|'DESCENDING' $Order
 * @property int<1, 999> $Limit
 * @property string $Marker
 * @property 'ALL'|'DOCUMENT'|'FOLDER' $Type
 * @property string $Include
 */
class DescribeFolderContentsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     FolderId: string,
     *     Sort?: 'DATE'|'NAME',
     *     Order?: 'ASCENDING'|'DESCENDING',
     *     Limit?: int<1, 999>,
     *     Marker?: string,
     *     Type?: 'ALL'|'DOCUMENT'|'FOLDER',
     *     Include?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
