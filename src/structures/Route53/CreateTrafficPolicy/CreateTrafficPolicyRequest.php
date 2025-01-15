<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Document
 * @property string|null $Comment
 */
class CreateTrafficPolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Document: string,
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
