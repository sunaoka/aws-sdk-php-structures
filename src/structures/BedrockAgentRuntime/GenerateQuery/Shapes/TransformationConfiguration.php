<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEXT_TO_SQL' $mode
 * @property TextToSqlConfiguration $textToSqlConfiguration
 */
class TransformationConfiguration extends Shape
{
    /**
     * @param array{
     *     mode: 'TEXT_TO_SQL',
     *     textToSqlConfiguration?: TextToSqlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
