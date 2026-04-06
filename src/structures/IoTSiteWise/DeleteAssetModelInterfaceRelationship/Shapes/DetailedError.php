<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteAssetModelInterfaceRelationship\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCOMPATIBLE_COMPUTE_LOCATION'|'INCOMPATIBLE_FORWARDING_CONFIGURATION' $code
 * @property string $message
 */
class DetailedError extends Shape
{
    /**
     * @param array{
     *     code: 'INCOMPATIBLE_COMPUTE_LOCATION'|'INCOMPATIBLE_FORWARDING_CONFIGURATION',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
