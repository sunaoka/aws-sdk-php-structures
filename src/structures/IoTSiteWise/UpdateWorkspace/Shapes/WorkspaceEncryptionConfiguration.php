<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION' $encryptionType
 * @property string|null $kmsKeyId
 */
class WorkspaceEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'SITEWISE_DEFAULT_ENCRYPTION'|'KMS_BASED_ENCRYPTION',
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
