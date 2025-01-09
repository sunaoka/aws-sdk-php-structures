<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateResourceCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ADD'|'REMOVE' $Action
 * @property Shapes\UpdateResourceCollectionFilter $ResourceCollection
 */
class UpdateResourceCollectionRequest extends Request
{
    /**
     * @param array{
     *     Action: 'ADD'|'REMOVE',
     *     ResourceCollection: Shapes\UpdateResourceCollectionFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
