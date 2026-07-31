<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TemplateGroup>|null $templateGroups
 */
class CroppingConfig extends Shape
{
    /**
     * @param array{templateGroups?: list<TemplateGroup>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
