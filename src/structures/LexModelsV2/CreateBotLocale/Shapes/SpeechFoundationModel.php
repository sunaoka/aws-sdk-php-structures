<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotLocale\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelArn
 * @property string|null $voiceId
 */
class SpeechFoundationModel extends Shape
{
    /**
     * @param array{
     *     modelArn: string,
     *     voiceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
