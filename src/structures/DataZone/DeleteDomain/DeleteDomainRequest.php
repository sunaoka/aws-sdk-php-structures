<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string|null $clientToken
 * @property bool|null $skipDeletionCheck
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     clientToken?: string|null,
     *     skipDeletionCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
