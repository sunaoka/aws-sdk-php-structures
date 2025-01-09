<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\ExportVectorEnrichmentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $ClientToken
 * @property string $ExecutionRoleArn
 * @property Shapes\ExportVectorEnrichmentJobOutputConfig $OutputConfig
 */
class ExportVectorEnrichmentJobRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ClientToken?: string,
     *     ExecutionRoleArn: string,
     *     OutputConfig: Shapes\ExportVectorEnrichmentJobOutputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
