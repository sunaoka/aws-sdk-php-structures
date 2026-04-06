<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property bool|null $skipDeletionCheck
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     skipDeletionCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
