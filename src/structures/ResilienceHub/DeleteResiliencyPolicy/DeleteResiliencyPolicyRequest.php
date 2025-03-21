<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteResiliencyPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $policyArn
 */
class DeleteResiliencyPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     policyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
