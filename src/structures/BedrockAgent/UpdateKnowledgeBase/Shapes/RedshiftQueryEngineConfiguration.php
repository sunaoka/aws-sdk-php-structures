<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVERLESS'|'PROVISIONED' $type
 * @property RedshiftServerlessConfiguration|null $serverlessConfiguration
 * @property RedshiftProvisionedConfiguration|null $provisionedConfiguration
 */
class RedshiftQueryEngineConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'SERVERLESS'|'PROVISIONED',
     *     serverlessConfiguration?: RedshiftServerlessConfiguration|null,
     *     provisionedConfiguration?: RedshiftProvisionedConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
