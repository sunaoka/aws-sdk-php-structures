<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateBatchPredictionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $inputPath
 * @property string $outputPath
 * @property string $eventTypeName
 * @property string $detectorName
 * @property string|null $detectorVersion
 * @property string $iamRoleArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateBatchPredictionJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     inputPath: string,
     *     outputPath: string,
     *     eventTypeName: string,
     *     detectorName: string,
     *     detectorVersion?: string|null,
     *     iamRoleArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
