<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InaccessibleEncryptionDateTime
 * @property string $Status
 * @property string $SseType
 * @property string $KmsMasterKeyArn
 */
class AwsDynamoDbTableSseDescription extends Shape
{
    /**
     * @param array{
     *     InaccessibleEncryptionDateTime?: string,
     *     Status?: string,
     *     SseType?: string,
     *     KmsMasterKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
