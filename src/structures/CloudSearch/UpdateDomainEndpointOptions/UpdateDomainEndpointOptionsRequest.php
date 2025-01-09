<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateDomainEndpointOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\DomainEndpointOptions $DomainEndpointOptions
 */
class UpdateDomainEndpointOptionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainEndpointOptions: Shapes\DomainEndpointOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
