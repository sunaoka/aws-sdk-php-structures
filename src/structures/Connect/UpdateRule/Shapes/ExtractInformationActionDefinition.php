<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RulesExtractionDefinitionIdentifier> $RulesExtractionDefinitions
 */
class ExtractInformationActionDefinition extends Shape
{
    /**
     * @param array{RulesExtractionDefinitions: list<RulesExtractionDefinitionIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
