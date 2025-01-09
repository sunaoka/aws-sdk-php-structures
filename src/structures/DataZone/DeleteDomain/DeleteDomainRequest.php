<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $identifier
 * @property bool $skipDeletionCheck
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     identifier: string,
     *     skipDeletionCheck?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
