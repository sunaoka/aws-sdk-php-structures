<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property 'FAILURE_MODE' $reportType
 * @property string|null $clientToken
 */
class CreateReportRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     reportType: 'FAILURE_MODE',
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
