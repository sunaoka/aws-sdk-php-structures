<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportName
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     ReportName: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
