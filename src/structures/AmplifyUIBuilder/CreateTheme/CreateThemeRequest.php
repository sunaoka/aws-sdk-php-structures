<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $clientToken
 * @property Shapes\CreateThemeData $themeToCreate
 */
class CreateThemeRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     clientToken?: string,
     *     themeToCreate: Shapes\CreateThemeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
