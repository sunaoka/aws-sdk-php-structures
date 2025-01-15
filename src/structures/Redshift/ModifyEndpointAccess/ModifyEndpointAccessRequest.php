<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyEndpointAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property list<string>|null $VpcSecurityGroupIds
 */
class ModifyEndpointAccessRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     VpcSecurityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
