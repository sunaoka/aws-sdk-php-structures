<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Document
 * @property string $Comment
 */
class CreateTrafficPolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Document: string,
     *     Comment?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
