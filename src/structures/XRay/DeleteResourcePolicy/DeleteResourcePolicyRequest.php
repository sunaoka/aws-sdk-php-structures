<?php

namespace Sunaoka\Aws\Structures\XRay\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyName
 * @property string|null $PolicyRevisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyName: string,
     *     PolicyRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
