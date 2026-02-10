<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecondarySubnet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $SecondarySubnetId
 */
class DeleteSecondarySubnetRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     SecondarySubnetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
