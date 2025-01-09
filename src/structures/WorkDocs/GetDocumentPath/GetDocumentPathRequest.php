<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property int $Limit
 * @property string $Fields
 * @property string $Marker
 */
class GetDocumentPathRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     Limit?: int,
     *     Fields?: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
