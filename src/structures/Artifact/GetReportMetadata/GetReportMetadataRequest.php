<?php

namespace Sunaoka\Aws\Structures\Artifact\GetReportMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 * @property int<1, max> $reportVersion
 */
class GetReportMetadataRequest extends Request
{
    /**
     * @param array{
     *     reportId: string,
     *     reportVersion?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
