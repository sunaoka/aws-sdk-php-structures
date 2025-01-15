<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointName
 * @property list<string>|null $vpcSecurityGroupIds
 */
class UpdateEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     endpointName: string,
     *     vpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
