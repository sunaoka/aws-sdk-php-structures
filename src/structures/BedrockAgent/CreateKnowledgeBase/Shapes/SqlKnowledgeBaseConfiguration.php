<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftConfiguration $redshiftConfiguration
 * @property 'REDSHIFT' $type
 */
class SqlKnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     redshiftConfiguration?: RedshiftConfiguration,
     *     type: 'REDSHIFT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
