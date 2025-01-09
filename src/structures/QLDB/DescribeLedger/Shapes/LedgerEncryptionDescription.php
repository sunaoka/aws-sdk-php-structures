<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeLedger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 * @property 'ENABLED'|'UPDATING'|'KMS_KEY_INACCESSIBLE' $EncryptionStatus
 * @property \Aws\Api\DateTimeResult $InaccessibleKmsKeyDateTime
 */
class LedgerEncryptionDescription extends Shape
{
    /**
     * @param array{
     *     KmsKeyArn: string,
     *     EncryptionStatus: 'ENABLED'|'UPDATING'|'KMS_KEY_INACCESSIBLE',
     *     InaccessibleKmsKeyDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
