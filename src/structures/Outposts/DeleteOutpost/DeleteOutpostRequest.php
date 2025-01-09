<?php

namespace Sunaoka\Aws\Structures\Outposts\DeleteOutpost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 */
class DeleteOutpostRequest extends Request
{
    /**
     * @param array{OutpostId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
