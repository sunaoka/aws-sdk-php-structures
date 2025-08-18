<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterIdentifier
 * @property RedshiftProvisionedAuthConfiguration $authConfiguration
 */
class RedshiftProvisionedConfiguration extends Shape
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     authConfiguration: RedshiftProvisionedAuthConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
