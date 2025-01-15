<?php

namespace Sunaoka\Aws\Structures\Comprehend\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $ResourcePolicy
 * @property string|null $PolicyRevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     ResourcePolicy: string,
     *     PolicyRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
