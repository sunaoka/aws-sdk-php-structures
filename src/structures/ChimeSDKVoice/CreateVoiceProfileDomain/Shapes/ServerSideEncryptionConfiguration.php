<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceProfileDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyArn
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{KmsKeyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
