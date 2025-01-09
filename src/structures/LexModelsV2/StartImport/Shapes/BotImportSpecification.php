<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartImport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botName
 * @property string $roleArn
 * @property DataPrivacy $dataPrivacy
 * @property int<60, 86400> $idleSessionTTLInSeconds
 * @property array<string, string> $botTags
 * @property array<string, string> $testBotAliasTags
 */
class BotImportSpecification extends Shape
{
    /**
     * @param array{
     *     botName: string,
     *     roleArn: string,
     *     dataPrivacy: DataPrivacy,
     *     idleSessionTTLInSeconds?: int<60, 86400>,
     *     botTags?: array<string, string>,
     *     testBotAliasTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
