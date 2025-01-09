<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeBot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 */
class DescribeBotRequest extends Request
{
    /**
     * @param array{botId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
