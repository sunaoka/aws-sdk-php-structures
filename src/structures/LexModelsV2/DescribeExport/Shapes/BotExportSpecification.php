<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botVersion
 */
class BotExportSpecification extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
