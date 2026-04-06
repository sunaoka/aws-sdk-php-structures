<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botName
 * @property string $roleArn
 * @property DataPrivacy $dataPrivacy
 * @property int<60, 86400>|null $idleSessionTTLInSeconds
 * @property array<string, string>|null $botTags
 * @property array<string, string>|null $testBotAliasTags
 */
class BotImportSpecification extends Shape
{
    /**
     * @param array{
     *     botName: string,
     *     roleArn: string,
     *     dataPrivacy: DataPrivacy,
     *     idleSessionTTLInSeconds?: int<60, 86400>|null,
     *     botTags?: array<string, string>|null,
     *     testBotAliasTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
