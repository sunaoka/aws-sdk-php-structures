<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property CodeHookSpecification|null $codeHookSpecification
 */
class BotAliasLocaleSettings extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     codeHookSpecification?: CodeHookSpecification|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
