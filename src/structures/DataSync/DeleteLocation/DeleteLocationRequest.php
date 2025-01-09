<?php

namespace Sunaoka\Aws\Structures\DataSync\DeleteLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 */
class DeleteLocationRequest extends Request
{
    /**
     * @param array{LocationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
