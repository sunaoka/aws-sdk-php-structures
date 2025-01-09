<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $endpointName
 * @property list<string> $vpcSecurityGroupIds
 */
class UpdateEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     endpointName: string,
     *     vpcSecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
