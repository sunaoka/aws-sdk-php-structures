<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UntagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadArn
 * @property list<string> $TagKeys
 */
class UntagResourceRequest extends Request
{
    /**
     * @param array{
     *     WorkloadArn: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
