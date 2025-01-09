<?php

namespace Sunaoka\Aws\Structures\XRay\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyName
 * @property string $PolicyDocument
 * @property string $PolicyRevisionId
 * @property bool $BypassPolicyLockoutCheck
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyName: string,
     *     PolicyDocument: string,
     *     PolicyRevisionId?: string,
     *     BypassPolicyLockoutCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
