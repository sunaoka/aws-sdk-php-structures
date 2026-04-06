<?php

namespace Sunaoka\Aws\Structures\Repostspace\DeleteSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 */
class DeleteSpaceRequest extends Request
{
    /**
     * @param array{spaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
