<?php

namespace Sunaoka\Aws\Structures\CloudFront\DeleteFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IfMatch
 */
class DeleteFunctionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IfMatch: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
