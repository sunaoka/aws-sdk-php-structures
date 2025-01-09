<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateBatchPredictionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $inputPath
 * @property string $outputPath
 * @property string $eventTypeName
 * @property string $detectorName
 * @property string $detectorVersion
 * @property string $iamRoleArn
 * @property list<Shapes\Tag> $tags
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
     *     detectorVersion?: string,
     *     iamRoleArn: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
