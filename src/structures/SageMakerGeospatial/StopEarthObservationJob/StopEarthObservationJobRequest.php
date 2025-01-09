<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StopEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class StopEarthObservationJobRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
