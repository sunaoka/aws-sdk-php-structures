<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EncryptionOption
 * @property string|null $KmsKey
 */
class AwsAthenaWorkGroupConfigurationResultConfigurationEncryptionConfigurationDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionOption?: string|null,
     *     KmsKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
