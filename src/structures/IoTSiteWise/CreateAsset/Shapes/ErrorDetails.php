<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE' $code
 * @property string $message
 * @property list<DetailedError>|null $details
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     code: 'VALIDATION_ERROR'|'INTERNAL_FAILURE',
     *     message: string,
     *     details?: list<DetailedError>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
