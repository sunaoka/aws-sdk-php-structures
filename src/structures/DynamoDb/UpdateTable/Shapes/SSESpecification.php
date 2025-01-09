<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property 'AES256'|'KMS' $SSEType
 * @property string $KMSMasterKeyId
 */
class SSESpecification extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     SSEType?: 'AES256'|'KMS',
     *     KMSMasterKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
