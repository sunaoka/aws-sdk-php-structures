<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartMediaAnalysisJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $JobName
 * @property Shapes\MediaAnalysisOperationsConfig $OperationsConfig
 * @property Shapes\MediaAnalysisInput $Input
 * @property Shapes\MediaAnalysisOutputConfig $OutputConfig
 * @property string $KmsKeyId
 */
class StartMediaAnalysisJobRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     JobName?: string,
     *     OperationsConfig: Shapes\MediaAnalysisOperationsConfig,
     *     Input: Shapes\MediaAnalysisInput,
     *     OutputConfig: Shapes\MediaAnalysisOutputConfig,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
