<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeReportPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportTemplate
 * @property list<string>|null $FrameworkArns
 * @property int|null $NumberOfFrameworks
 * @property list<string>|null $Accounts
 * @property list<string>|null $OrganizationUnits
 * @property list<string>|null $Regions
 */
class ReportSetting extends Shape
{
    /**
     * @param array{
     *     ReportTemplate: string,
     *     FrameworkArns?: list<string>|null,
     *     NumberOfFrameworks?: int|null,
     *     Accounts?: list<string>|null,
     *     OrganizationUnits?: list<string>|null,
     *     Regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
