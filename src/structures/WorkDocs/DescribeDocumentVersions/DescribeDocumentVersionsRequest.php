<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeDocumentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AuthenticationToken
 * @property string $DocumentId
 * @property string|null $Marker
 * @property int<1, 999>|null $Limit
 * @property string|null $Include
 * @property string|null $Fields
 */
class DescribeDocumentVersionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string|null,
     *     DocumentId: string,
     *     Marker?: string|null,
     *     Limit?: int<1, 999>|null,
     *     Include?: string|null,
     *     Fields?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
