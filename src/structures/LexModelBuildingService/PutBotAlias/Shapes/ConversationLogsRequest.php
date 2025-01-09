<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogSettingsRequest> $logSettings
 * @property string $iamRoleArn
 */
class ConversationLogsRequest extends Shape
{
    /**
     * @param array{
     *     logSettings: list<LogSettingsRequest>,
     *     iamRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
