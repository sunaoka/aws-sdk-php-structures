<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateDeliverabilityTestReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportName
 * @property string $FromEmailAddress
 * @property Shapes\EmailContent $Content
 * @property list<Shapes\Tag> $Tags
 */
class CreateDeliverabilityTestReportRequest extends Request
{
    /**
     * @param array{
     *     ReportName?: string,
     *     FromEmailAddress: string,
     *     Content: Shapes\EmailContent,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
