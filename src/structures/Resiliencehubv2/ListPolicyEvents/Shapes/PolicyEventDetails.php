<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListPolicyEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $title
 * @property string $description
 * @property PolicyEventMetadata|null $eventMetadata
 */
class PolicyEventDetails extends Shape
{
    /**
     * @param array{
     *     title: string,
     *     description: string,
     *     eventMetadata?: PolicyEventMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
