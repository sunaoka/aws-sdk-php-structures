<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDICOMImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 * @property string $jobId
 */
class GetDICOMImportJobRequest extends Request
{
    /**
     * @param array{
     *     datastoreId: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
