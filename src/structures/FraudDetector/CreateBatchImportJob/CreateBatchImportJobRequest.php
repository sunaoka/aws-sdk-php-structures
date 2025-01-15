<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateBatchImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $inputPath
 * @property string $outputPath
 * @property string $eventTypeName
 * @property string $iamRoleArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateBatchImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     inputPath: string,
     *     outputPath: string,
     *     eventTypeName: string,
     *     iamRoleArn: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
