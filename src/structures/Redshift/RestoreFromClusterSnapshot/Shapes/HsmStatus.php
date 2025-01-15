<?php

namespace Sunaoka\Aws\Structures\Redshift\RestoreFromClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HsmClientCertificateIdentifier
 * @property string|null $HsmConfigurationIdentifier
 * @property string|null $Status
 */
class HsmStatus extends Shape
{
    /**
     * @param array{
     *     HsmClientCertificateIdentifier?: string|null,
     *     HsmConfigurationIdentifier?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
