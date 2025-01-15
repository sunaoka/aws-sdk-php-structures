<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTrafficDistributionGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $InstanceId
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateTrafficDistributionGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     InstanceId: string,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
