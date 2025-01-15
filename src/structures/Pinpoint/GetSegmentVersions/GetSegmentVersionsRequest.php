<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string|null $PageSize
 * @property string $SegmentId
 * @property string|null $Token
 */
class GetSegmentVersionsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     PageSize?: string|null,
     *     SegmentId: string,
     *     Token?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
