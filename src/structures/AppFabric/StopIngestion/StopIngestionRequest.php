<?php

namespace Sunaoka\Aws\Structures\AppFabric\StopIngestion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ingestionIdentifier
 * @property string $appBundleIdentifier
 */
class StopIngestionRequest extends Request
{
    /**
     * @param array{
     *     ingestionIdentifier: string,
     *     appBundleIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
