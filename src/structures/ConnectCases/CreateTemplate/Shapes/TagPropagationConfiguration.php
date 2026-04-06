<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Cases' $resourceType
 * @property array<string, string> $tagMap
 */
class TagPropagationConfiguration extends Shape
{
    /**
     * @param array{
     *     resourceType: 'Cases',
     *     tagMap: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
