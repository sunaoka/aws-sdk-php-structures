<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateActionTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Id
 */
class CreateActionTargetRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description: string,
     *     Id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
