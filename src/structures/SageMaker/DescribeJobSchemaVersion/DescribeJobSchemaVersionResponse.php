<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeJobSchemaVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AgentRFT'|'SyntheticDataGeneration'|'DataQualityEvaluation'|'AgentRFTEvaluation'|'DataTransformation' $JobCategory
 * @property string $JobConfigSchemaVersion
 * @property string $JobConfigSchema
 */
class DescribeJobSchemaVersionResponse extends Response
{
}
