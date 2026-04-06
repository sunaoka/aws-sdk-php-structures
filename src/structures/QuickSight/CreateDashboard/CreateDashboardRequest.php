<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $Name
 * @property Shapes\Parameters|null $Parameters
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property Shapes\DashboardSourceEntity|null $SourceEntity
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $VersionDescription
 * @property Shapes\DashboardPublishOptions|null $DashboardPublishOptions
 * @property string|null $ThemeArn
 * @property Shapes\DashboardVersionDefinition|null $Definition
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     Name: string,
     *     Parameters?: Shapes\Parameters|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     SourceEntity?: Shapes\DashboardSourceEntity|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     VersionDescription?: string|null,
     *     DashboardPublishOptions?: Shapes\DashboardPublishOptions|null,
     *     ThemeArn?: string|null,
     *     Definition?: Shapes\DashboardVersionDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
