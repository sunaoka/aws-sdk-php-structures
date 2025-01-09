<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $KmsKeyId
 */
class AwsOpenSearchServiceDomainEncryptionAtRestOptionsDetails extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
