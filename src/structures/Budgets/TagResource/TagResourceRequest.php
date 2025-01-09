<?php

namespace Sunaoka\Aws\Structures\Budgets\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property list<Shapes\ResourceTag> $ResourceTags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     ResourceTags: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
