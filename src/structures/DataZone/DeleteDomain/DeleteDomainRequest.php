<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $identifier
 * @property bool|null $skipDeletionCheck
 */
class DeleteDomainRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     identifier: string,
     *     skipDeletionCheck?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
