<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateCodeScan;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string|null $clientToken
 */
class CreateCodeScanRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
