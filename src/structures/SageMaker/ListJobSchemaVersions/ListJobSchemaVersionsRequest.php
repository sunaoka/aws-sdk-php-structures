<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListJobSchemaVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListJobSchemaVersionsRequest extends Request
{
    /**
     * @param array{
     *     JobCategory: 'AgentRFT'|'AgentRFTEvaluation',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
