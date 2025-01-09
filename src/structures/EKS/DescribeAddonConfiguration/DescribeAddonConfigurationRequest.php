<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeAddonConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $addonName
 * @property string $addonVersion
 */
class DescribeAddonConfigurationRequest extends Request
{
    /**
     * @param array{
     *     addonName: string,
     *     addonVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
