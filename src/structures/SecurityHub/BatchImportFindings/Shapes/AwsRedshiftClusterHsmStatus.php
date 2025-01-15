<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HsmClientCertificateIdentifier
 * @property string|null $HsmConfigurationIdentifier
 * @property string|null $Status
 */
class AwsRedshiftClusterHsmStatus extends Shape
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
