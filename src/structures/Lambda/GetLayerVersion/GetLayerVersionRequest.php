<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerName
 * @property int $VersionNumber
 */
class GetLayerVersionRequest extends Request
{
    /**
     * @param array{
     *     LayerName: string,
     *     VersionNumber: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
