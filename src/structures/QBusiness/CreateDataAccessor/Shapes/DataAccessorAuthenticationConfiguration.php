<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateDataAccessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataAccessorIdcTrustedTokenIssuerConfiguration|null $idcTrustedTokenIssuerConfiguration
 */
class DataAccessorAuthenticationConfiguration extends Shape
{
    /**
     * @param array{idcTrustedTokenIssuerConfiguration?: DataAccessorIdcTrustedTokenIssuerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
