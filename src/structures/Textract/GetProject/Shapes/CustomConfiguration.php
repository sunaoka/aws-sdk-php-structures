<?php

namespace Sunaoka\Aws\Structures\Textract\GetProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BlueprintItem> $Blueprints
 * @property list<BlueprintItem>|null $FallbackBlueprints
 */
class CustomConfiguration extends Shape
{
    /**
     * @param array{
     *     Blueprints: list<BlueprintItem>,
     *     FallbackBlueprints?: list<BlueprintItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
