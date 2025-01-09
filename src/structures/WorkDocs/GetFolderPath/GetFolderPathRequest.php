<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolderPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $FolderId
 * @property int<1, 999> $Limit
 * @property string $Fields
 * @property string $Marker
 */
class GetFolderPathRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     FolderId: string,
     *     Limit?: int<1, 999>,
     *     Fields?: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
