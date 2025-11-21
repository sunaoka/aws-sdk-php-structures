<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'Primary'|'Fallback'|null $assistedNluMode
 * @property IntentDisambiguationSettings|null $intentDisambiguationSettings
 */
class NluImprovementSpecification extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     assistedNluMode?: 'Primary'|'Fallback'|null,
     *     intentDisambiguationSettings?: IntentDisambiguationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
