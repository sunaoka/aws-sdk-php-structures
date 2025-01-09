<?php

namespace Sunaoka\Aws\Structures\Route53\CreateCidrCollection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $CallerReference
 */
class CreateCidrCollectionRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     CallerReference: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
