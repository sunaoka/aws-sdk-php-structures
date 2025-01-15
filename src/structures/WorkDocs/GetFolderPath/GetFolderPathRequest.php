<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolderPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $FolderId
 * @property int<1, 999>|null $Limit
 * @property string|null $Fields
 * @property string|null $Marker
 */
class GetFolderPathRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     FolderId: string,
     *     Limit?: int<1, 999>|null,
     *     Fields?: string|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
