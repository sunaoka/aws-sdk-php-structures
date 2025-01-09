<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $Name
 * @property string $BaseThemeId
 * @property string $VersionDescription
 * @property Shapes\ThemeConfiguration $Configuration
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property list<Shapes\Tag> $Tags
 */
class CreateThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     Name: string,
     *     BaseThemeId: string,
     *     VersionDescription?: string,
     *     Configuration: Shapes\ThemeConfiguration,
     *     Permissions?: list<Shapes\ResourcePermission>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
