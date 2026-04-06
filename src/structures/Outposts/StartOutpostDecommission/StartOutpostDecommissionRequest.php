<?php

namespace Sunaoka\Aws\Structures\Outposts\StartOutpostDecommission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property bool|null $ValidateOnly
 */
class StartOutpostDecommissionRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     ValidateOnly?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
