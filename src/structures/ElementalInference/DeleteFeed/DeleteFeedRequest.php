<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteFeed;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteFeedRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
