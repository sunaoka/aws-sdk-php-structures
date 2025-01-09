<?php

namespace Sunaoka\Aws\Structures\VoiceID\UpdateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $OldKmsKeyId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $UpdateStatus
 */
class ServerSideEncryptionUpdateDetails extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     OldKmsKeyId?: string,
     *     UpdateStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
