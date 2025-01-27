<?php

namespace Sunaoka\Aws\Structures\HealthLake\DescribeFHIRDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SMART_ON_FHIR_V1'|'SMART_ON_FHIR'|'AWS_AUTH' $AuthorizationStrategy
 * @property bool|null $FineGrainedAuthorizationEnabled
 * @property string|null $Metadata
 * @property string|null $IdpLambdaArn
 */
class IdentityProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthorizationStrategy: 'SMART_ON_FHIR_V1'|'SMART_ON_FHIR'|'AWS_AUTH',
     *     FineGrainedAuthorizationEnabled?: bool|null,
     *     Metadata?: string|null,
     *     IdpLambdaArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
