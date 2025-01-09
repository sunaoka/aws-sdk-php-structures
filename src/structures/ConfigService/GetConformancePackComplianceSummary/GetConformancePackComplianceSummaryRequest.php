<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConformancePackNames
 * @property int $Limit
 * @property string $NextToken
 */
class GetConformancePackComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackNames: list<string>,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
