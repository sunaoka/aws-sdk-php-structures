<?php

namespace Sunaoka\Aws\Structures\Organizations\UpdatePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Content
 */
class UpdatePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyId: string,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
