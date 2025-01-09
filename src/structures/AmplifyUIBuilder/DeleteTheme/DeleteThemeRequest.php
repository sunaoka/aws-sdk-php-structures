<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\DeleteTheme;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string $id
 */
class DeleteThemeRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
