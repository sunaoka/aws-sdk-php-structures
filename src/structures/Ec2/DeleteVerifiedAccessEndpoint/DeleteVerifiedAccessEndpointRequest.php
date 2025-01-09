<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property string $ClientToken
 * @property bool $DryRun
 */
class DeleteVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
