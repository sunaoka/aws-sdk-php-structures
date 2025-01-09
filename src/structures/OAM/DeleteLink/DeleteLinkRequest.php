<?php

namespace Sunaoka\Aws\Structures\OAM\DeleteLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteLinkRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
