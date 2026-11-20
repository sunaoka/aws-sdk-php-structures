<?php

namespace Sunaoka\Aws\Structures\Polly\CreateVoice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 * @property array<string, string>|null $EncryptionContext
 */
class CustomerManagedEncryption extends Shape
{
    /**
     * @param array{
     *     KmsKeyArn: string,
     *     EncryptionContext?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
