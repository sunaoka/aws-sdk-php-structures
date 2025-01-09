<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property CodeHookSpecification $codeHookSpecification
 */
class BotAliasLocaleSettings extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     codeHookSpecification?: CodeHookSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
