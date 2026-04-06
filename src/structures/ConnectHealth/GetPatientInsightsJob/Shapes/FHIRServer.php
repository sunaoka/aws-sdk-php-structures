<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fhirEndpoint
 * @property string|null $oauthToken
 */
class FHIRServer extends Shape
{
    /**
     * @param array{
     *     fhirEndpoint: string,
     *     oauthToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
