<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClientCredentialsGrantDetails|null $ClientCredentialsGrantDetails
 */
class ClientCredentialsDetails extends Shape
{
    /**
     * @param array{ClientCredentialsGrantDetails?: ClientCredentialsGrantDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
