<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportTemplate
 * @property list<string> $FrameworkArns
 * @property int $NumberOfFrameworks
 * @property list<string> $Accounts
 * @property list<string> $OrganizationUnits
 * @property list<string> $Regions
 */
class ReportSetting extends Shape
{
    /**
     * @param array{
     *     ReportTemplate: string,
     *     FrameworkArns?: list<string>,
     *     NumberOfFrameworks?: int,
     *     Accounts?: list<string>,
     *     OrganizationUnits?: list<string>,
     *     Regions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
