<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $updateId
 * @property string $nodegroupName
 * @property string $addonName
 */
class DescribeUpdateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     updateId: string,
     *     nodegroupName?: string,
     *     addonName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
