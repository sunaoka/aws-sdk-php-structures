<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NoEncryption'|null $NoEncryptionConfig
 * @property KMSEncryptionConfig|null $KMSEncryptionConfig
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     NoEncryptionConfig?: 'NoEncryption'|null,
     *     KMSEncryptionConfig?: KMSEncryptionConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
