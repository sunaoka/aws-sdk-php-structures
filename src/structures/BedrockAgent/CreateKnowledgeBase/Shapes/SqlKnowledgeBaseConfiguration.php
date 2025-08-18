<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT' $type
 * @property RedshiftConfiguration|null $redshiftConfiguration
 */
class SqlKnowledgeBaseConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'REDSHIFT',
     *     redshiftConfiguration?: RedshiftConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
