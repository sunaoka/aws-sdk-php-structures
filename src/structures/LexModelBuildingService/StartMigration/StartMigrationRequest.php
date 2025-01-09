<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\StartMigration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $v1BotName
 * @property string $v1BotVersion
 * @property string $v2BotName
 * @property string $v2BotRole
 * @property 'CREATE_NEW'|'UPDATE_EXISTING' $migrationStrategy
 */
class StartMigrationRequest extends Request
{
    /**
     * @param array{
     *     v1BotName: string,
     *     v1BotVersion: string,
     *     v2BotName: string,
     *     v2BotRole: string,
     *     migrationStrategy: 'CREATE_NEW'|'UPDATE_EXISTING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
