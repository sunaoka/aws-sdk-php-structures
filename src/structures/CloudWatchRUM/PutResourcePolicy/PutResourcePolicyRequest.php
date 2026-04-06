<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $PolicyDocument
 * @property string|null $PolicyRevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     PolicyDocument: string,
     *     PolicyRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
