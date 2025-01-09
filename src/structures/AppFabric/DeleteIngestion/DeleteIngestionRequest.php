<?php

namespace Sunaoka\Aws\Structures\AppFabric\DeleteIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 */
class DeleteIngestionRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
