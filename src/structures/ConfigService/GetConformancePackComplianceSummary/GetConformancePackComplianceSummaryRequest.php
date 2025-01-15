<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ConformancePackNames
 * @property int<0, 20>|null $Limit
 * @property string|null $NextToken
 */
class GetConformancePackComplianceSummaryRequest extends Request
{
    /**
     * @param array{
     *     ConformancePackNames: list<string>,
     *     Limit?: int<0, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
