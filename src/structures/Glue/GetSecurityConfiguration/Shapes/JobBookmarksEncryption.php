<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'CSE-KMS' $JobBookmarksEncryptionMode
 * @property string $KmsKeyArn
 */
class JobBookmarksEncryption extends Shape
{
    /**
     * @param array{
     *     JobBookmarksEncryptionMode?: 'DISABLED'|'CSE-KMS',
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
