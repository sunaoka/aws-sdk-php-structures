<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSharedVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EnableFsxRouteTableUpdatesFromParticipantAccounts
 * @property string $ClientRequestToken
 */
class UpdateSharedVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     EnableFsxRouteTableUpdatesFromParticipantAccounts?: string,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
