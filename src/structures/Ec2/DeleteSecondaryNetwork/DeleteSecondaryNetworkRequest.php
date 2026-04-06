<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecondaryNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $SecondaryNetworkId
 */
class DeleteSecondaryNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SecondaryNetworkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
