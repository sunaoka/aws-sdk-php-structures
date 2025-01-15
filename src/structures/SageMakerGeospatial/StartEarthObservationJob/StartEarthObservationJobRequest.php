<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ExecutionRoleArn
 * @property Shapes\InputConfigInput $InputConfig
 * @property Shapes\JobConfigInput $JobConfig
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class StartEarthObservationJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ExecutionRoleArn: string,
     *     InputConfig: Shapes\InputConfigInput,
     *     JobConfig: Shapes\JobConfigInput,
     *     KmsKeyId?: string|null,
     *     Name: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
