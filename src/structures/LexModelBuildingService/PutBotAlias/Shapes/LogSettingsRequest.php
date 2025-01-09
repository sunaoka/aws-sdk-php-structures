<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutBotAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUDIO'|'TEXT' $logType
 * @property 'CLOUDWATCH_LOGS'|'S3' $destination
 * @property string $kmsKeyArn
 * @property string $resourceArn
 */
class LogSettingsRequest extends Shape
{
    /**
     * @param array{
     *     logType: 'AUDIO'|'TEXT',
     *     destination: 'CLOUDWATCH_LOGS'|'S3',
     *     kmsKeyArn?: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
