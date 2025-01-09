<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\StartTestSetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $botId
 * @property string $botAliasId
 * @property string $localeId
 * @property ConversationLogsDataSourceFilterBy $filter
 */
class ConversationLogsDataSource extends Shape
{
    /**
     * @param array{
     *     botId: string,
     *     botAliasId: string,
     *     localeId: string,
     *     filter: ConversationLogsDataSourceFilterBy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
