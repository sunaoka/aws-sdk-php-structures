<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSharedVpcConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EnableFsxRouteTableUpdatesFromParticipantAccounts
 * @property string|null $ClientRequestToken
 */
class UpdateSharedVpcConfigurationRequest extends Request
{
    /**
     * @param array{
     *     EnableFsxRouteTableUpdatesFromParticipantAccounts?: string|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
