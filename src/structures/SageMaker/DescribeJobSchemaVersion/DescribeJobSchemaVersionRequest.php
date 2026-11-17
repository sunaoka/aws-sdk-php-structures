<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJobSchemaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AgentRFT'|'SyntheticDataGeneration'|'DataQualityEvaluation'|'AgentRFTEvaluation'|'DataTransformation' $JobCategory
 * @property string|null $JobConfigSchemaVersion
 */
class DescribeJobSchemaVersionRequest extends Request
{
    /**
     * @param array{
     *     JobCategory: 'AgentRFT'|'SyntheticDataGeneration'|'DataQualityEvaluation'|'AgentRFTEvaluation'|'DataTransformation',
     *     JobConfigSchemaVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
