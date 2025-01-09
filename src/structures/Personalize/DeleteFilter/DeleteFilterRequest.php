<?php

namespace Sunaoka\Aws\Structures\Personalize\DeleteFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $filterArn
 */
class DeleteFilterRequest extends Request
{
    /**
     * @param array{filterArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
