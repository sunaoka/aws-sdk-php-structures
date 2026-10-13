<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $policy
 * @property string|null $revisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     policy: string,
     *     revisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
