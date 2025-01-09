<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetConfiguredModelAlgorithmAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrainedModelExportsMaxSize $maxSize
 * @property list<'MODEL'|'OUTPUT'> $filesToExport
 */
class TrainedModelExportsConfigurationPolicy extends Shape
{
    /**
     * @param array{
     *     maxSize: TrainedModelExportsMaxSize,
     *     filesToExport: list<'MODEL'|'OUTPUT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
