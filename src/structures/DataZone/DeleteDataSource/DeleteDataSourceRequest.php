<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $domainIdentifier
 * @property string $identifier
 * @property bool $retainPermissionsOnRevokeFailure
 */
class DeleteDataSourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     domainIdentifier: string,
     *     identifier: string,
     *     retainPermissionsOnRevokeFailure?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
