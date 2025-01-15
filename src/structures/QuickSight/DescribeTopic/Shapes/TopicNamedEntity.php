<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EntityName
 * @property string|null $EntityDescription
 * @property list<string>|null $EntitySynonyms
 * @property SemanticEntityType|null $SemanticEntityType
 * @property list<NamedEntityDefinition>|null $Definition
 */
class TopicNamedEntity extends Shape
{
    /**
     * @param array{
     *     EntityName: string,
     *     EntityDescription?: string|null,
     *     EntitySynonyms?: list<string>|null,
     *     SemanticEntityType?: SemanticEntityType|null,
     *     Definition?: list<NamedEntityDefinition>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
