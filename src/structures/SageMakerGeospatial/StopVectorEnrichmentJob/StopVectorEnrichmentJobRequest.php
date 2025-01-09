<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StopVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class StopVectorEnrichmentJobRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
