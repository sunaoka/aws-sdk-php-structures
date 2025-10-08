<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListCollaborationTrainedModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelName
 * @property string|null $versionIdentifier
 * @property string $modelName
 */
class IncrementalTrainingDataChannelOutput extends Shape
{
    /**
     * @param array{
     *     channelName: string,
     *     versionIdentifier?: string|null,
     *     modelName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
