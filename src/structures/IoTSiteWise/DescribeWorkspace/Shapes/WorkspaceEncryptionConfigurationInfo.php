<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION' $encryptionType
 * @property string|null $kmsKeyArn
 */
class WorkspaceEncryptionConfigurationInfo extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION',
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
