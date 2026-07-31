<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $templateUris
 */
class TemplateGroup extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     templateUris: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
