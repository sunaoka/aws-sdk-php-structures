<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeDocumentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $Marker
 * @property int<1, 999> $Limit
 * @property string $Include
 * @property string $Fields
 */
class DescribeDocumentVersionsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     Marker?: string,
     *     Limit?: int<1, 999>,
     *     Include?: string,
     *     Fields?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
