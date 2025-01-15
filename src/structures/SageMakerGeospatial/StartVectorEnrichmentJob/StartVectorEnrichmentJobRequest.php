<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ExecutionRoleArn
 * @property Shapes\VectorEnrichmentJobInputConfig $InputConfig
 * @property Shapes\VectorEnrichmentJobConfig $JobConfig
 * @property string|null $KmsKeyId
 * @property string $Name
 * @property array<string, string>|null $Tags
 */
class StartVectorEnrichmentJobRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ExecutionRoleArn: string,
     *     InputConfig: Shapes\VectorEnrichmentJobInputConfig,
     *     JobConfig: Shapes\VectorEnrichmentJobConfig,
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
