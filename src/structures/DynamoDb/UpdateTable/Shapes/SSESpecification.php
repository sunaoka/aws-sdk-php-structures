<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property 'AES256'|'KMS'|null $SSEType
 * @property string|null $KMSMasterKeyId
 */
class SSESpecification extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     SSEType?: 'AES256'|'KMS'|null,
     *     KMSMasterKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
