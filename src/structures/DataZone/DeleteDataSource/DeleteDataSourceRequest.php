<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $domainIdentifier
 * @property string $identifier
 * @property bool|null $retainPermissionsOnRevokeFailure
 */
class DeleteDataSourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     domainIdentifier: string,
     *     identifier: string,
     *     retainPermissionsOnRevokeFailure?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
