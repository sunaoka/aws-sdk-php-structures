<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property 'RUNNING'|'DONE'|null $Status
 */
class ListExperimentRunsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Status?: 'RUNNING'|'DONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
