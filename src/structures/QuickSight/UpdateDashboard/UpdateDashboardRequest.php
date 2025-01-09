<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $Name
 * @property Shapes\DashboardSourceEntity $SourceEntity
 * @property Shapes\Parameters $Parameters
 * @property string $VersionDescription
 * @property Shapes\DashboardPublishOptions $DashboardPublishOptions
 * @property string $ThemeArn
 * @property Shapes\DashboardVersionDefinition $Definition
 * @property Shapes\ValidationStrategy $ValidationStrategy
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     Name: string,
     *     SourceEntity?: Shapes\DashboardSourceEntity,
     *     Parameters?: Shapes\Parameters,
     *     VersionDescription?: string,
     *     DashboardPublishOptions?: Shapes\DashboardPublishOptions,
     *     ThemeArn?: string,
     *     Definition?: Shapes\DashboardVersionDefinition,
     *     ValidationStrategy?: Shapes\ValidationStrategy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
