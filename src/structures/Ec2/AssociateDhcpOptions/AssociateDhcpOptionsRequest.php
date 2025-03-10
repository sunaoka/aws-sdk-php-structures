<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DhcpOptionsId
 * @property string $VpcId
 * @property bool|null $DryRun
 */
class AssociateDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpOptionsId: string,
     *     VpcId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
