<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $clientToken
 * @property Shapes\CreateThemeData $themeToCreate
 */
class CreateThemeRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     clientToken?: string|null,
     *     themeToCreate: Shapes\CreateThemeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
