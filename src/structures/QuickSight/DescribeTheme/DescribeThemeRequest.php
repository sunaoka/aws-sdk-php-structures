<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property int<1, max>|null $VersionNumber
 * @property string|null $AliasName
 */
class DescribeThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     VersionNumber?: int<1, max>|null,
     *     AliasName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
