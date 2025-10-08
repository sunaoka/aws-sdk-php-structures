<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $idcTrustedTokenIssuerArn
 */
class DataAccessorIdcTrustedTokenIssuerConfiguration extends Shape
{
    /**
     * @param array{idcTrustedTokenIssuerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
