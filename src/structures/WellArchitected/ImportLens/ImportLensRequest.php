<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ImportLens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LensAlias
 * @property string $JSONString
 * @property string $ClientRequestToken
 * @property array<string, string> $Tags
 */
class ImportLensRequest extends Request
{
    /**
     * @param array{
     *     LensAlias?: string,
     *     JSONString: string,
     *     ClientRequestToken: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
