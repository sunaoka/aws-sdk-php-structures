<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateThemeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $AliasName
 * @property int $ThemeVersionNumber
 */
class CreateThemeAliasRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     AliasName: string,
     *     ThemeVersionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
