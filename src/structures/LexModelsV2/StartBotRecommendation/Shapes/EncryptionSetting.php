<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 * @property string|null $botLocaleExportPassword
 * @property string|null $associatedTranscriptsPassword
 */
class EncryptionSetting extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string|null,
     *     botLocaleExportPassword?: string|null,
     *     associatedTranscriptsPassword?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
