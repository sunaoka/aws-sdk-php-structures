<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\GetMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property string $environmentName
 */
class GetMetadataRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     environmentName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
