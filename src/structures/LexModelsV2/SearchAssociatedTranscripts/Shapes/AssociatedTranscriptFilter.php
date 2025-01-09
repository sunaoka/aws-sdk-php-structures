<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\SearchAssociatedTranscripts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IntentId'|'SlotTypeId' $name
 * @property list<string> $values
 */
class AssociatedTranscriptFilter extends Shape
{
    /**
     * @param array{
     *     name: 'IntentId'|'SlotTypeId',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
