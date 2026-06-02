<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 */
class DescribeJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobCategory: 'AgentRFT'|'AgentRFTEvaluation'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
