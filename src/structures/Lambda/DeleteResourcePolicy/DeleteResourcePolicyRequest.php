<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $RevisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     RevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
