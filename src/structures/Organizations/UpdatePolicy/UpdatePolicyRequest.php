<?php

namespace Sunaoka\Aws\Structures\Organizations\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string $Name
 * @property string $Description
 * @property string $Content
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     Name?: string,
     *     Description?: string,
     *     Content?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
