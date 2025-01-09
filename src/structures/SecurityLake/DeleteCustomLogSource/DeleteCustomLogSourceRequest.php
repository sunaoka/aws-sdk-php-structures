<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteCustomLogSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceName
 * @property string $sourceVersion
 */
class DeleteCustomLogSourceRequest extends Request
{
    /**
     * @param array{
     *     sourceName: string,
     *     sourceVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
