<?php

namespace Sunaoka\Aws\Structures\S3Control\PutAccessPointScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 * @property Shapes\Scope $Scope
 */
class PutAccessPointScopeRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string,
     *     Scope: Shapes\Scope
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
