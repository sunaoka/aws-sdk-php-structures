<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteSnapmirrorPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string $SnapmirrorPolicyId
 */
class DeleteSnapmirrorPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     SnapmirrorPolicyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
