<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\DeleteEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteEarthObservationJobRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
