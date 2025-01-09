<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUDIO'|'TEXT' $logType
 * @property 'CLOUDWATCH_LOGS'|'S3' $destination
 * @property string $kmsKeyArn
 * @property string $resourceArn
 * @property string $resourcePrefix
 */
class LogSettingsResponse extends Shape
{
    /**
     * @param array{
     *     logType?: 'AUDIO'|'TEXT',
     *     destination?: 'CLOUDWATCH_LOGS'|'S3',
     *     kmsKeyArn?: string,
     *     resourceArn?: string,
     *     resourcePrefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
