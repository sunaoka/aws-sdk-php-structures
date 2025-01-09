<?php

namespace Sunaoka\Aws\Structures\Sfn\PublishStateMachineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string $revisionId
 * @property string $description
 */
class PublishStateMachineVersionRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     revisionId?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
