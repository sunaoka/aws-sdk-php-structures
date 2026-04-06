<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelResolveToResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $assetId
 */
class ResolveTo extends Shape
{
    /**
     * @param array{assetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
