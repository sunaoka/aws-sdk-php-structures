<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachCertificateFromDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 */
class DetachCertificateFromDistributionRequest extends Request
{
    /**
     * @param array{distributionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
