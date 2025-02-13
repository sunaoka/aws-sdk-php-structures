<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\GetWorkingLocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'INGESTION'|'SAGEMAKER'|null $locationType
 */
class GetWorkingLocationRequest extends Request
{
    /**
     * @param array{locationType?: 'INGESTION'|'SAGEMAKER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
