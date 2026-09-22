<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetSpace;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 */
class GetSpaceRequest extends Request
{
    /**
     * @param array{spaceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
