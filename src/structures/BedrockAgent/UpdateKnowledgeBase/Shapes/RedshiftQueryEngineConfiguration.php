<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftProvisionedConfiguration|null $provisionedConfiguration
 * @property RedshiftServerlessConfiguration|null $serverlessConfiguration
 * @property 'SERVERLESS'|'PROVISIONED' $type
 */
class RedshiftQueryEngineConfiguration extends Shape
{
    /**
     * @param array{
     *     provisionedConfiguration?: RedshiftProvisionedConfiguration|null,
     *     serverlessConfiguration?: RedshiftServerlessConfiguration|null,
     *     type: 'SERVERLESS'|'PROVISIONED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
