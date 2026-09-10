<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateInputSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $matchLabels
 * @property list<EksLabelSelectorRequirement>|null $matchExpressions
 */
class EksLabelSelector extends Shape
{
    /**
     * @param array{
     *     matchLabels?: array<string, string>|null,
     *     matchExpressions?: list<EksLabelSelectorRequirement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
