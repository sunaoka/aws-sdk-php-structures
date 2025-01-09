<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeComments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AuthenticationToken
 * @property string $DocumentId
 * @property string $VersionId
 * @property int<1, 999> $Limit
 * @property string $Marker
 */
class DescribeCommentsRequest extends Request
{
    /**
     * @param array{
     *     AuthenticationToken?: string,
     *     DocumentId: string,
     *     VersionId: string,
     *     Limit?: int<1, 999>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
