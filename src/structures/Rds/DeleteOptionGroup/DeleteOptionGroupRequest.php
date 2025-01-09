<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteOptionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OptionGroupName
 */
class DeleteOptionGroupRequest extends Request
{
    /**
     * @param array{OptionGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
