<?php

namespace Sunaoka\Aws\Structures\FMS\PutResourceSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceSet $ResourceSet
 * @property list<Shapes\Tag> $TagList
 */
class PutResourceSetRequest extends Request
{
    /**
     * @param array{
     *     ResourceSet: Shapes\ResourceSet,
     *     TagList?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
