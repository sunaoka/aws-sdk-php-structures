<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxChangeset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $errorMessage
 * @property 'The inputs to this request are invalid.'|'Service limits have been exceeded.'|'Missing required permission to perform this request.'|'One or more inputs to this request were not found.'|'The system temporarily lacks sufficient resources to process the request.'|'An internal error has occurred.'|'Cancelled'|'A user recoverable error has occurred' $errorType
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     errorMessage?: string,
     *     errorType?: 'The inputs to this request are invalid.'|'Service limits have been exceeded.'|'Missing required permission to perform this request.'|'One or more inputs to this request were not found.'|'The system temporarily lacks sufficient resources to process the request.'|'An internal error has occurred.'|'Cancelled'|'A user recoverable error has occurred'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
