<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DeleteVerifiedAccessEndpointRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
