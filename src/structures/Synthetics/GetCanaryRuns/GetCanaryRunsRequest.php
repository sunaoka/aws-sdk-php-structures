<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanaryRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $DryRunId
 * @property 'CANARY_RUN'|'DRY_RUN'|null $RunType
 */
class GetCanaryRunsRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     DryRunId?: string|null,
     *     RunType?: 'CANARY_RUN'|'DRY_RUN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
