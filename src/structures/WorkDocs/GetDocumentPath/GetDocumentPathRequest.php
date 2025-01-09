<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocumentPath;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property int<1, 999> $Limit
 * @property string $Fields
 * @property string $Marker
 */
class GetDocumentPathRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
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
