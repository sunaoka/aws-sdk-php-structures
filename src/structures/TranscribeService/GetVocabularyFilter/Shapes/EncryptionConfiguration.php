<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetVocabularyFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KMSEncryptionContext
 * @property string $KMSKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     KMSEncryptionContext?: array<string, string>|null,
     *     KMSKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
