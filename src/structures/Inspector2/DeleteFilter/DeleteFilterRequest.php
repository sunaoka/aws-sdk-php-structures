<?php

namespace Sunaoka\Aws\Structures\Inspector2\DeleteFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteFilterRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
