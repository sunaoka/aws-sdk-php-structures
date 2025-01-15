<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUDIO'|'TEXT'|null $logType
 * @property 'CLOUDWATCH_LOGS'|'S3'|null $destination
 * @property string|null $kmsKeyArn
 * @property string|null $resourceArn
 * @property string|null $resourcePrefix
 */
class LogSettingsResponse extends Shape
{
    /**
     * @param array{
     *     logType?: 'AUDIO'|'TEXT'|null,
     *     destination?: 'CLOUDWATCH_LOGS'|'S3'|null,
     *     kmsKeyArn?: string|null,
     *     resourceArn?: string|null,
     *     resourcePrefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
