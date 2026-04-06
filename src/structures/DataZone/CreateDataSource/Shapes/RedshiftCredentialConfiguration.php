<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretManagerArn
 */
class RedshiftCredentialConfiguration extends Shape
{
    /**
     * @param array{secretManagerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
