<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetEarthObservationJobRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
