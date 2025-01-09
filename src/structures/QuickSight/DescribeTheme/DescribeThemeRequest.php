<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property int $VersionNumber
 * @property string $AliasName
 */
class DescribeThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     VersionNumber?: int,
     *     AliasName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
