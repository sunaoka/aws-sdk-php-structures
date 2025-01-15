<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property string $name
 * @property string $importUrl
 */
class StartImportTaskRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     name: string,
     *     importUrl: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
