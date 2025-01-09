<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteAddon;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $addonName
 * @property bool $preserve
 */
class DeleteAddonRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     addonName: string,
     *     preserve?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
