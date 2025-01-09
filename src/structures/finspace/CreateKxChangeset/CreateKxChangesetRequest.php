<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxChangeset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property list<Shapes\ChangeRequest> $changeRequests
 * @property string $clientToken
 */
class CreateKxChangesetRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     changeRequests: list<Shapes\ChangeRequest>,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
