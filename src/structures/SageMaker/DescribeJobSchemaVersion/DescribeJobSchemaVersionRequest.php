<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJobSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 * @property string|null $JobConfigSchemaVersion
 */
class DescribeJobSchemaVersionRequest extends Request
{
    /**
     * @param array{
     *     JobCategory: 'AgentRFT'|'AgentRFTEvaluation',
     *     JobConfigSchemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
