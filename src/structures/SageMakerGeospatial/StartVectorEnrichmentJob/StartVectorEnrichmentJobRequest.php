<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $ExecutionRoleArn
 * @property Shapes\VectorEnrichmentJobInputConfig $InputConfig
 * @property Shapes\VectorEnrichmentJobConfig $JobConfig
 * @property string $KmsKeyId
 * @property string $Name
 * @property array<string, string> $Tags
 */
class StartVectorEnrichmentJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     ExecutionRoleArn: string,
     *     InputConfig: Shapes\VectorEnrichmentJobInputConfig,
     *     JobConfig: Shapes\VectorEnrichmentJobConfig,
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
