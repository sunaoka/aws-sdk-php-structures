<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SSEAlgorithm
 * @property string|null $KMSMasterKeyID
 */
class AwsS3BucketServerSideEncryptionByDefault extends Shape
{
    /**
     * @param array{
     *     SSEAlgorithm?: string|null,
     *     KMSMasterKeyID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
