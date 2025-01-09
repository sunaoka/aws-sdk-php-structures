<?php

namespace Sunaoka\Aws\Structures\Iam\UntagInstanceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceProfileName
 * @property list<string> $TagKeys
 */
class UntagInstanceProfileRequest extends Request
{
    /**
     * @param array{
     *     InstanceProfileName: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
