<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 * @property 'AgentRFT'|'SyntheticDataGeneration'|'DataQualityEvaluation'|'AgentRFTEvaluation'|'DataTransformation' $JobCategory
 */
class DescribeJobRequest extends Request
{
    /**
     * @param array{
     *     JobName: string,
     *     JobCategory: 'AgentRFT'|'SyntheticDataGeneration'|'DataQualityEvaluation'|'AgentRFTEvaluation'|'DataTransformation'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
