<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\StartPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FHIRServer|null $fhirServer
 * @property list<S3Source>|null $s3Sources
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     fhirServer?: FHIRServer|null,
     *     s3Sources?: list<S3Source>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
