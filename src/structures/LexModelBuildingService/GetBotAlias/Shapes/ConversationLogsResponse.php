<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogSettingsResponse>|null $logSettings
 * @property string|null $iamRoleArn
 */
class ConversationLogsResponse extends Shape
{
    /**
     * @param array{
     *     logSettings?: list<LogSettingsResponse>|null,
     *     iamRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
