<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateSbomExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CYCLONEDX_1_4'|'SPDX_2_3' $reportFormat
 * @property Shapes\ResourceFilterCriteria|null $resourceFilterCriteria
 * @property Shapes\Destination $s3Destination
 */
class CreateSbomExportRequest extends Request
{
    /**
     * @param array{
     *     reportFormat: 'CYCLONEDX_1_4'|'SPDX_2_3',
     *     resourceFilterCriteria?: Shapes\ResourceFilterCriteria|null,
     *     s3Destination: Shapes\Destination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
