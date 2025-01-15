<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING'|null $Status
 * @property 'AES256'|'KMS'|null $SSEType
 * @property string|null $KMSMasterKeyArn
 * @property \Aws\Api\DateTimeResult|null $InaccessibleEncryptionDateTime
 */
class SSEDescription extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING'|null,
     *     SSEType?: 'AES256'|'KMS'|null,
     *     KMSMasterKeyArn?: string|null,
     *     InaccessibleEncryptionDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
