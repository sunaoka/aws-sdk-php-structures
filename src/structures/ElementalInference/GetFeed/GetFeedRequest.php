<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetFeedRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
