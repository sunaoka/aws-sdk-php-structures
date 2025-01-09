<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\CreateNetworkSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NameValuePair> $options
 * @property list<NetworkResourceDefinition> $resourceDefinitions
 */
class SitePlan extends Shape
{
    /**
     * @param array{
     *     options?: list<NameValuePair>,
     *     resourceDefinitions?: list<NetworkResourceDefinition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
