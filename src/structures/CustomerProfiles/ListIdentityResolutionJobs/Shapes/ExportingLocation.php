<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListIdentityResolutionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ExportingLocation|null $S3Exporting
 */
class ExportingLocation extends Shape
{
    /**
     * @param array{S3Exporting?: S3ExportingLocation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
