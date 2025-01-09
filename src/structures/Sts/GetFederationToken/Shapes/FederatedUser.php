<?php

namespace Sunaoka\Aws\Structures\Sts\GetFederationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FederatedUserId
 * @property string $Arn
 */
class FederatedUser extends Shape
{
    /**
     * @param array{
     *     FederatedUserId: string,
     *     Arn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
