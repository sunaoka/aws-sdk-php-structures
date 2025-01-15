<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $Name
 * @property string $BaseThemeId
 * @property string|null $VersionDescription
 * @property Shapes\ThemeConfiguration $Configuration
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     Name: string,
     *     BaseThemeId: string,
     *     VersionDescription?: string|null,
     *     Configuration: Shapes\ThemeConfiguration,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
