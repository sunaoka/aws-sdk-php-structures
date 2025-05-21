<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $Name
 */
class GetAccessPointScopeRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     Name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
