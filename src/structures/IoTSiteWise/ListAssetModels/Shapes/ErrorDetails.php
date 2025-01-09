<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE' $code
 * @property string $message
 * @property list<DetailedError> $details
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     code: 'VALIDATION_ERROR'|'INTERNAL_FAILURE',
     *     message: string,
     *     details?: list<DetailedError>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
