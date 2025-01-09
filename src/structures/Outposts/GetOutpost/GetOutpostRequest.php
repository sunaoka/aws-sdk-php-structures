<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 */
class GetOutpostRequest extends Request
{
    /**
     * @param array{OutpostId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
