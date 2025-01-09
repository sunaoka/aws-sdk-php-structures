<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptionOption
 * @property string $KmsKey
 */
class AwsAthenaWorkGroupConfigurationResultConfigurationEncryptionConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionOption?: string,
     *     KmsKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
