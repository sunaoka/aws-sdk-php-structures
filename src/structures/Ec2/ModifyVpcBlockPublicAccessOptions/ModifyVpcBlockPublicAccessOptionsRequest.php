<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcBlockPublicAccessOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'off'|'block-bidirectional'|'block-ingress' $InternetGatewayBlockMode
 */
class ModifyVpcBlockPublicAccessOptionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InternetGatewayBlockMode: 'off'|'block-bidirectional'|'block-ingress'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
