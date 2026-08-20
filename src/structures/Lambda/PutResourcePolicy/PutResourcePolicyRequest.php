<?php

namespace Sunaoka\Aws\Structures\Lambda\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 * @property string|null $RevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
