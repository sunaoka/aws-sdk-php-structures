<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogSettingsResponse> $logSettings
 * @property string $iamRoleArn
 */
class ConversationLogsResponse extends Shape
{
    /**
     * @param array{
     *     logSettings?: list<LogSettingsResponse>,
     *     iamRoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
