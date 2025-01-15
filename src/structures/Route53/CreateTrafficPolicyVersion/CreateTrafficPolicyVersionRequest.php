<?php

namespace Sunaoka\Aws\Structures\Route53\CreateTrafficPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Document
 * @property string|null $Comment
 */
class CreateTrafficPolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Document: string,
     *     Comment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
