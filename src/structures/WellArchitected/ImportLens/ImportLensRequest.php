<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ImportLens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $LensAlias
 * @property string $JSONString
 * @property string $ClientRequestToken
 * @property array<string, string>|null $Tags
 */
class ImportLensRequest extends Request
{
    /**
     * @param array{
     *     LensAlias?: string|null,
     *     JSONString: string,
     *     ClientRequestToken: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
