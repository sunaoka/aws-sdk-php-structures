<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateResponderGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $certificateAuthorityCertificates
 */
class TrustStoreConfiguration extends Shape
{
    /**
     * @param array{certificateAuthorityCertificates: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
