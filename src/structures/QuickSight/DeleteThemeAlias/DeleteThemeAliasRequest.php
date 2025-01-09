<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteThemeAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ThemeId
 * @property string $AliasName
 */
class DeleteThemeAliasRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ThemeId: string,
     *     AliasName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
