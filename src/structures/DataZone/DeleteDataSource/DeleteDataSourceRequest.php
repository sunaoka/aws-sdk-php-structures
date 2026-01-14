<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $identifier
 * @property string|null $clientToken
 * @property bool|null $retainPermissionsOnRevokeFailure
 */
class DeleteDataSourceRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     identifier: string,
     *     clientToken?: string|null,
     *     retainPermissionsOnRevokeFailure?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
