<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ExecutionRoleArn
 * @property Shapes\InputConfigInput $InputConfig
 * @property Shapes\JobConfigInput $JobConfig
 * @property string $KmsKeyId
 * @property string $Name
 * @property array<string, string> $Tags
 */
class StartEarthObservationJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ExecutionRoleArn: string,
     *     InputConfig: Shapes\InputConfigInput,
     *     JobConfig: Shapes\JobConfigInput,
     *     KmsKeyId?: string,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
