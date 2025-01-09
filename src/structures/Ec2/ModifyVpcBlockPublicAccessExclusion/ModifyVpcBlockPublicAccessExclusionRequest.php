<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcBlockPublicAccessExclusion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ExclusionId
 * @property 'allow-bidirectional'|'allow-egress' $InternetGatewayExclusionMode
 */
class ModifyVpcBlockPublicAccessExclusionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ExclusionId: string,
     *     InternetGatewayExclusionMode: 'allow-bidirectional'|'allow-egress'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
