<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'Primary'|'Fallback'|'DialogManager'|null $assistedNluMode
 * @property IntentDisambiguationSettings|null $intentDisambiguationSettings
 */
class NluImprovementSpecification extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     assistedNluMode?: 'Primary'|'Fallback'|'DialogManager'|null,
     *     intentDisambiguationSettings?: IntentDisambiguationSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
