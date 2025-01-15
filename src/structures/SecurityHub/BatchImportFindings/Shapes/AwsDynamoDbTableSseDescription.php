<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InaccessibleEncryptionDateTime
 * @property string|null $Status
 * @property string|null $SseType
 * @property string|null $KmsMasterKeyArn
 */
class AwsDynamoDbTableSseDescription extends Shape
{
    /**
     * @param array{
     *     InaccessibleEncryptionDateTime?: string|null,
     *     Status?: string|null,
     *     SseType?: string|null,
     *     KmsMasterKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
