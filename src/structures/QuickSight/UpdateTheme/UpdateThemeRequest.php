<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $Name
 * @property string $BaseThemeId
 * @property string $VersionDescription
 * @property Shapes\ThemeConfiguration $Configuration
 */
class UpdateThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     Name?: string,
     *     BaseThemeId: string,
     *     VersionDescription?: string,
     *     Configuration?: Shapes\ThemeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
