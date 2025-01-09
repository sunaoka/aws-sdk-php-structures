<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property int<1, max> $VersionNumber
 * @property string $AliasName
 */
class DescribeThemeRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     VersionNumber?: int<1, max>,
     *     AliasName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
