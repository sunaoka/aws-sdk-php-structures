<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityName
 * @property string $EntityDescription
 * @property list<string> $EntitySynonyms
 * @property SemanticEntityType $SemanticEntityType
 * @property list<NamedEntityDefinition> $Definition
 */
class TopicNamedEntity extends Shape
{
    /**
     * @param array{
     *     EntityName: string,
     *     EntityDescription?: string,
     *     EntitySynonyms?: list<string>,
     *     SemanticEntityType?: SemanticEntityType,
     *     Definition?: list<NamedEntityDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
