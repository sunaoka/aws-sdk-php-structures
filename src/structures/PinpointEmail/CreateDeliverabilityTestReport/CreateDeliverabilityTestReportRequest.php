<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReportName
 * @property string $FromEmailAddress
 * @property Shapes\EmailContent $Content
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDeliverabilityTestReportRequest extends Request
{
    /**
     * @param array{
     *     ReportName?: string|null,
     *     FromEmailAddress: string,
     *     Content: Shapes\EmailContent,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
