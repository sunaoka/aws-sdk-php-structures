<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\StartDICOMImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $jobName
 * @property string $dataAccessRoleArn
 * @property string $clientToken
 * @property string $datastoreId
 * @property string $inputS3Uri
 * @property string $outputS3Uri
 * @property string|null $inputOwnerAccountId
 */
class StartDICOMImportJobRequest extends Request
{
    /**
     * @param array{
     *     jobName?: string|null,
     *     dataAccessRoleArn: string,
     *     clientToken: string,
     *     datastoreId: string,
     *     inputS3Uri: string,
     *     outputS3Uri: string,
     *     inputOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
