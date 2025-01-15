<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DhcpOptionsId
 * @property bool|null $DryRun
 */
class DeleteDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpOptionsId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
