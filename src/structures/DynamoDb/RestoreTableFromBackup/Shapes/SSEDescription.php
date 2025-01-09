<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableFromBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING' $Status
 * @property 'AES256'|'KMS' $SSEType
 * @property string $KMSMasterKeyArn
 * @property \Aws\Api\DateTimeResult $InaccessibleEncryptionDateTime
 */
class SSEDescription extends Shape
{
    /**
     * @param array{
     *     Status?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|'UPDATING',
     *     SSEType?: 'AES256'|'KMS',
     *     KMSMasterKeyArn?: string,
     *     InaccessibleEncryptionDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
