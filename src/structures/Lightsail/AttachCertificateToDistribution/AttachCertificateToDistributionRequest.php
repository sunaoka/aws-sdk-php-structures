<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachCertificateToDistribution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property string $certificateName
 */
class AttachCertificateToDistributionRequest extends Request
{
    /**
     * @param array{
     *     distributionName: string,
     *     certificateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
