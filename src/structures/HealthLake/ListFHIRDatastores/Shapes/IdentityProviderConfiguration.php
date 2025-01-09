<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRDatastores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMART_ON_FHIR_V1'|'AWS_AUTH' $AuthorizationStrategy
 * @property bool $FineGrainedAuthorizationEnabled
 * @property string $Metadata
 * @property string $IdpLambdaArn
 */
class IdentityProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthorizationStrategy: 'SMART_ON_FHIR_V1'|'AWS_AUTH',
     *     FineGrainedAuthorizationEnabled?: bool,
     *     Metadata?: string,
     *     IdpLambdaArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
