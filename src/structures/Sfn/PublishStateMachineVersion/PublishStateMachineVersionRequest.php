<?php

namespace Sunaoka\Aws\Structures\Sfn\PublishStateMachineVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property string|null $revisionId
 * @property string|null $description
 */
class PublishStateMachineVersionRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn: string,
     *     revisionId?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
