<?php

namespace Sunaoka\Aws\Structures\ImportExport\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 * @property string|null $APIVersion
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{
     *     JobId: string,
     *     APIVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
