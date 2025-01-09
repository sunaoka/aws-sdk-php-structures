<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $integrationName
 * @property bool $force
 */
class DeleteIntegrationRequest extends Request
{
    /**
     * @param array{
     *     integrationName: string,
     *     force?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
