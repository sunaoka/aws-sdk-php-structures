<?php

namespace Sunaoka\Aws\Structures\PcaConnectorAd\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ValidityPeriod $RenewalPeriod
 * @property ValidityPeriod $ValidityPeriod
 */
class CertificateValidity extends Shape
{
    /**
     * @param array{
     *     RenewalPeriod: ValidityPeriod,
     *     ValidityPeriod: ValidityPeriod
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
