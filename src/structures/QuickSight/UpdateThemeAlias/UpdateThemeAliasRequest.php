<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateThemeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $AliasName
 * @property int<1, max> $ThemeVersionNumber
 */
class UpdateThemeAliasRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     AliasName: string,
     *     ThemeVersionNumber: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
