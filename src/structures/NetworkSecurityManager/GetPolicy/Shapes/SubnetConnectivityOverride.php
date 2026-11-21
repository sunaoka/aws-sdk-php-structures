<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'flexible'|'bidirectional'|'outbound-only'|'exclude' $connectivityType
 * @property list<string> $scopes
 */
class SubnetConnectivityOverride extends Shape
{
    /**
     * @param array{
     *     connectivityType: 'flexible'|'bidirectional'|'outbound-only'|'exclude',
     *     scopes: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
