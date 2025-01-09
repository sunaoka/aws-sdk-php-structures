<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\UpdateTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 * @property string $clientToken
 * @property Shapes\UpdateThemeData $updatedTheme
 */
class UpdateThemeRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string,
     *     clientToken?: string,
     *     updatedTheme: Shapes\UpdateThemeData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
