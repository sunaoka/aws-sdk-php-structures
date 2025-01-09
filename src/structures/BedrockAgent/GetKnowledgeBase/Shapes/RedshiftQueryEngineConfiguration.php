<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftProvisionedConfiguration $provisionedConfiguration
 * @property RedshiftServerlessConfiguration $serverlessConfiguration
 * @property 'SERVERLESS'|'PROVISIONED' $type
 */
class RedshiftQueryEngineConfiguration extends Shape
{
    /**
     * @param array{
     *     provisionedConfiguration?: RedshiftProvisionedConfiguration,
     *     serverlessConfiguration?: RedshiftServerlessConfiguration,
     *     type: 'SERVERLESS'|'PROVISIONED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
