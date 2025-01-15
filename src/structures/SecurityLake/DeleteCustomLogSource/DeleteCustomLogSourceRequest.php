<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteCustomLogSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceName
 * @property string|null $sourceVersion
 */
class DeleteCustomLogSourceRequest extends Request
{
    /**
     * @param array{
     *     sourceName: string,
     *     sourceVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
