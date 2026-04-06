<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartMediaAnalysisJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property string|null $JobName
 * @property Shapes\MediaAnalysisOperationsConfig $OperationsConfig
 * @property Shapes\MediaAnalysisInput $Input
 * @property Shapes\MediaAnalysisOutputConfig $OutputConfig
 * @property string|null $KmsKeyId
 */
class StartMediaAnalysisJobRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     JobName?: string|null,
     *     OperationsConfig: Shapes\MediaAnalysisOperationsConfig,
     *     Input: Shapes\MediaAnalysisInput,
     *     OutputConfig: Shapes\MediaAnalysisOutputConfig,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
