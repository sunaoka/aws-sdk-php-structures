<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property int<1, 999>|null $Limit
 * @property string|null $Fields
 * @property string|null $Marker
 */
class GetDocumentPathRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
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
