<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateSbomExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceFilterCriteria|null $resourceFilterCriteria
 * @property 'CYCLONEDX_1_4'|'SPDX_2_3' $reportFormat
 * @property Shapes\Destination $s3Destination
 */
class CreateSbomExportRequest extends Request
{
    /**
     * @param array{
     *     resourceFilterCriteria?: Shapes\ResourceFilterCriteria|null,
     *     reportFormat: 'CYCLONEDX_1_4'|'SPDX_2_3',
     *     s3Destination: Shapes\Destination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
