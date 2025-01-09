<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftProvisionedAuthConfiguration $authConfiguration
 * @property string $clusterIdentifier
 */
class RedshiftProvisionedConfiguration extends Shape
{
    /**
     * @param array{
     *     authConfiguration: RedshiftProvisionedAuthConfiguration,
     *     clusterIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
