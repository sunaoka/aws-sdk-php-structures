<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\StartDICOMImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobName
 * @property string $dataAccessRoleArn
 * @property string $clientToken
 * @property string $datastoreId
 * @property string $inputS3Uri
 * @property string $outputS3Uri
 * @property string $inputOwnerAccountId
 */
class StartDICOMImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName?: string,
     *     dataAccessRoleArn: string,
     *     clientToken: string,
     *     datastoreId: string,
     *     inputS3Uri: string,
     *     outputS3Uri: string,
     *     inputOwnerAccountId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
