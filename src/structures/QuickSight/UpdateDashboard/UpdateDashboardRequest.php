<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $Name
 * @property Shapes\DashboardSourceEntity|null $SourceEntity
 * @property Shapes\Parameters|null $Parameters
 * @property string|null $VersionDescription
 * @property Shapes\DashboardPublishOptions|null $DashboardPublishOptions
 * @property string|null $ThemeArn
 * @property Shapes\DashboardVersionDefinition|null $Definition
 * @property Shapes\ValidationStrategy|null $ValidationStrategy
 */
class UpdateDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     Name: string,
     *     SourceEntity?: Shapes\DashboardSourceEntity|null,
     *     Parameters?: Shapes\Parameters|null,
     *     VersionDescription?: string|null,
     *     DashboardPublishOptions?: Shapes\DashboardPublishOptions|null,
     *     ThemeArn?: string|null,
     *     Definition?: Shapes\DashboardVersionDefinition|null,
     *     ValidationStrategy?: Shapes\ValidationStrategy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
