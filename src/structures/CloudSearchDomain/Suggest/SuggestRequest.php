<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Suggest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $query
 * @property string $suggester
 * @property int|null $size
 */
class SuggestRequest extends Request
{
    /**
     * @param array{
     *     query: string,
     *     suggester: string,
     *     size?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
