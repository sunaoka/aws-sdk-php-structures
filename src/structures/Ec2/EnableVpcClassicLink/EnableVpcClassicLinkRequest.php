<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVpcClassicLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $VpcId
 */
class EnableVpcClassicLinkRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
