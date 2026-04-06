<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateLink\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $httpCode
 * @property 'NO_BID'|'PASSTHROUGH' $action
 * @property list<'NONE'|'METRIC'|'RESPONSE'> $loggingTypes
 * @property float|null $responseLoggingPercentage
 */
class ResponderErrorMaskingForHttpCode extends Shape
{
    /**
     * @param array{
     *     httpCode: string,
     *     action: 'NO_BID'|'PASSTHROUGH',
     *     loggingTypes: list<'NONE'|'METRIC'|'RESPONSE'>,
     *     responseLoggingPercentage?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
