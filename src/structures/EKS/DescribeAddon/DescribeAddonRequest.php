<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $addonName
 */
class DescribeAddonRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     addonName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
