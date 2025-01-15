<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string|null $Name
 * @property string $BaseThemeId
 * @property string|null $VersionDescription
 * @property Shapes\ThemeConfiguration|null $Configuration
 */
class UpdateThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     Name?: string|null,
     *     BaseThemeId: string,
     *     VersionDescription?: string|null,
     *     Configuration?: Shapes\ThemeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
