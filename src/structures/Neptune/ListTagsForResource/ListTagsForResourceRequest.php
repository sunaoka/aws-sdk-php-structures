<?php

namespace Sunaoka\Aws\Structures\Neptune\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property list<Shapes\Filter> $Filters
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceName: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
