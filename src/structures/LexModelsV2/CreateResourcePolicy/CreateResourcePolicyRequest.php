<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $policy
 */
class CreateResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
