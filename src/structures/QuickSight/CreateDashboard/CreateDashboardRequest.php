<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string $Name
 * @property Shapes\Parameters $Parameters
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property Shapes\DashboardSourceEntity $SourceEntity
 * @property list<Shapes\Tag> $Tags
 * @property string $VersionDescription
 * @property Shapes\DashboardPublishOptions $DashboardPublishOptions
 * @property string $ThemeArn
 * @property Shapes\DashboardVersionDefinition $Definition
 * @property Shapes\ValidationStrategy $ValidationStrategy
 * @property list<string> $FolderArns
 * @property Shapes\LinkSharingConfiguration $LinkSharingConfiguration
 * @property list<string> $LinkEntities
 */
class CreateDashboardRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     Name: string,
     *     Parameters?: Shapes\Parameters,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     SourceEntity?: Shapes\DashboardSourceEntity,
     *     Tags?: list<Shapes\Tag>,
     *     VersionDescription?: string,
     *     DashboardPublishOptions?: Shapes\DashboardPublishOptions,
     *     ThemeArn?: string,
     *     Definition?: Shapes\DashboardVersionDefinition,
     *     ValidationStrategy?: Shapes\ValidationStrategy,
     *     FolderArns?: list<string>,
     *     LinkSharingConfiguration?: Shapes\LinkSharingConfiguration,
     *     LinkEntities?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
