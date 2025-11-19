<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'Primary'|'Fallback'|null $assistedNluMode
 */
class NluImprovementSpecification extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     assistedNluMode?: 'Primary'|'Fallback'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
