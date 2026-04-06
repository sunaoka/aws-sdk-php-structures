<?php

namespace Sunaoka\Aws\Structures\OAM\GetLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetLinkRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
