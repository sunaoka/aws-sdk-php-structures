<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RemoveAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 */
class RemoveAliasRequest extends Request
{
    /**
     * @param array{AliasName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
