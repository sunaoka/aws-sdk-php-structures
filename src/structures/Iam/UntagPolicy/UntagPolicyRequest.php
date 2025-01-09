<?php

namespace Sunaoka\Aws\Structures\Iam\UntagPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 * @property list<string> $TagKeys
 */
class UntagPolicyRequest extends Request
{
    /**
     * @param array{
     *     PolicyArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
