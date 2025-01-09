<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HsmClientCertificateIdentifier
 * @property string $HsmConfigurationIdentifier
 * @property string $Status
 */
class AwsRedshiftClusterHsmStatus extends Shape
{
    /**
     * @param array{
     *     HsmClientCertificateIdentifier?: string,
     *     HsmConfigurationIdentifier?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
