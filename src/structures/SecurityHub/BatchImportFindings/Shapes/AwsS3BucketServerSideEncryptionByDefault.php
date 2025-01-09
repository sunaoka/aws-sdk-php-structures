<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SSEAlgorithm
 * @property string $KMSMasterKeyID
 */
class AwsS3BucketServerSideEncryptionByDefault extends Shape
{
    /**
     * @param array{
     *     SSEAlgorithm?: string,
     *     KMSMasterKeyID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
