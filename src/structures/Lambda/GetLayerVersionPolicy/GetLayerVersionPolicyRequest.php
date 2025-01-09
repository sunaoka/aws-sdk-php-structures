<?php

namespace Sunaoka\Aws\Structures\Lambda\GetLayerVersionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LayerName
 * @property int $VersionNumber
 */
class GetLayerVersionPolicyRequest extends Request
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
