<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVpcEndpointServiceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<string> $ServiceIds
 */
class DeleteVpcEndpointServiceConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
