<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTrafficDistributionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $InstanceId
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateTrafficDistributionGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     InstanceId: string,
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
