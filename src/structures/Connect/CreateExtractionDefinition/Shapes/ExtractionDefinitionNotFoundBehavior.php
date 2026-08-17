<?php

namespace Sunaoka\Aws\Structures\Connect\CreateExtractionDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USE_DEFAULT_VALUE'|'OMIT' $Behavior
 * @property string|null $DefaultValue
 */
class ExtractionDefinitionNotFoundBehavior extends Shape
{
    /**
     * @param array{
     *     Behavior: 'USE_DEFAULT_VALUE'|'OMIT',
     *     DefaultValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
