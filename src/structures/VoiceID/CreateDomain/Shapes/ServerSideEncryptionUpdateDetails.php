<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $OldKmsKeyId
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $UpdateStatus
 */
class ServerSideEncryptionUpdateDetails extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     OldKmsKeyId?: string|null,
     *     UpdateStatus?: 'IN_PROGRESS'|'COMPLETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
