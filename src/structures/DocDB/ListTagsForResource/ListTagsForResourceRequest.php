<?php

namespace Sunaoka\Aws\Structures\DocDB\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceName
 * @property list<Shapes\Filter>|null $Filters
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceName: string,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
