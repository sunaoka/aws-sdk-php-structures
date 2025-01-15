<?php

namespace Sunaoka\Aws\Structures\VoiceID\StartFraudsterRegistrationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 * @property string $S3Uri
 */
class OutputDataConfig extends Shape
{
    /**
     * @param array{
     *     KmsKeyId?: string|null,
     *     S3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
