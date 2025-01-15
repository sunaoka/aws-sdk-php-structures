<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportThemes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 * @property string|null $nextToken
 */
class ExportThemesRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
