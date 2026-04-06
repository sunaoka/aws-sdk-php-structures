<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $tableNames
 */
class RedshiftQueryEngineAwsDataCatalogStorageConfiguration extends Shape
{
    /**
     * @param array{tableNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
