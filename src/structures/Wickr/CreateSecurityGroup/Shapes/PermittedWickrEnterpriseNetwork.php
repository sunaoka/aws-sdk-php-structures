<?php

namespace Sunaoka\Aws\Structures\Wickr\CreateSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domain
 * @property string $networkId
 */
class PermittedWickrEnterpriseNetwork extends Shape
{
    /**
     * @param array{
     *     domain: string,
     *     networkId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
