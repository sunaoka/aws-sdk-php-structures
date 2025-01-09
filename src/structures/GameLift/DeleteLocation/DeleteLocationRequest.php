<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationName
 */
class DeleteLocationRequest extends Request
{
    /**
     * @param array{LocationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
