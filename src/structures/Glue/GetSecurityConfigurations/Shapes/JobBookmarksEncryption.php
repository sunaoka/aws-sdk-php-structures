<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'CSE-KMS'|null $JobBookmarksEncryptionMode
 * @property string|null $KmsKeyArn
 */
class JobBookmarksEncryption extends Shape
{
    /**
     * @param array{
     *     JobBookmarksEncryptionMode?: 'DISABLED'|'CSE-KMS'|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
