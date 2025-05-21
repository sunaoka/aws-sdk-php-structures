<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $PolicyRevisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PolicyRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
