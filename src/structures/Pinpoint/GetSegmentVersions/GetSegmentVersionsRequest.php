<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $PageSize
 * @property string $SegmentId
 * @property string $Token
 */
class GetSegmentVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     PageSize?: string,
     *     SegmentId: string,
     *     Token?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
