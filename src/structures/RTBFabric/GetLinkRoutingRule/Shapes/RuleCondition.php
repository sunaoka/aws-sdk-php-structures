<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetLinkRoutingRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hostHeader
 * @property string|null $hostHeaderWildcard
 * @property string|null $pathPrefix
 * @property string|null $pathExact
 * @property QueryStringKeyValuePair|null $queryStringEquals
 * @property string|null $queryStringExists
 */
class RuleCondition extends Shape
{
    /**
     * @param array{
     *     hostHeader?: string|null,
     *     hostHeaderWildcard?: string|null,
     *     pathPrefix?: string|null,
     *     pathExact?: string|null,
     *     queryStringEquals?: QueryStringKeyValuePair|null,
     *     queryStringExists?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
