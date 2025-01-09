<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateThemeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $AliasName
 * @property int<1, max> $ThemeVersionNumber
 */
class CreateThemeAliasRequest extends Request
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
