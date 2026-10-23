<?php

namespace Sunaoka\Aws\Structures\Continuum\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $policy
 * @property string|null $expectedRevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     policy?: string|null,
     *     expectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
