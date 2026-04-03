<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\GetDataAutomationLibrary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VOCABULARY' $entityType
 * @property string|null $entityMetadata
 */
class EntityTypeInfo extends Shape
{
    /**
     * @param array{
     *     entityType: 'VOCABULARY',
     *     entityMetadata?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
