<?php

namespace Sunaoka\Aws\Structures\Artifact\ListReportVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 * @property int<1, 300>|null $maxResults
 * @property string|null $nextToken
 */
class ListReportVersionsRequest extends Request
{
    /**
     * @param array{
     *     reportId: string,
     *     maxResults?: int<1, 300>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
