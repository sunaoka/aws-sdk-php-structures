<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeDomainEndpointOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool $Deployed
 */
class DescribeDomainEndpointOptionsRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Deployed?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
