<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\UpdateNetworkSitePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NameValuePair>|null $options
 * @property list<NetworkResourceDefinition>|null $resourceDefinitions
 */
class SitePlan extends Shape
{
    /**
     * @param array{
     *     options?: list<NameValuePair>|null,
     *     resourceDefinitions?: list<NetworkResourceDefinition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
