<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $databaseName
 */
class RedshiftQueryEngineRedshiftStorageConfiguration extends Shape
{
    /**
     * @param array{databaseName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
