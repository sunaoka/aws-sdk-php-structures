<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBotRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 * @property string $botLocaleExportPassword
 * @property string $associatedTranscriptsPassword
 */
class EncryptionSetting extends Shape
{
    /**
     * @param array{
     *     kmsKeyArn?: string,
     *     botLocaleExportPassword?: string,
     *     associatedTranscriptsPassword?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
