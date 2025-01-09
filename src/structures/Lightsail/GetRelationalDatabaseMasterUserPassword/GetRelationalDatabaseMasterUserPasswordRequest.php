<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseMasterUserPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $relationalDatabaseName
 * @property 'CURRENT'|'PREVIOUS'|'PENDING' $passwordVersion
 */
class GetRelationalDatabaseMasterUserPasswordRequest extends Request
{
    /**
     * @param array{
     *     relationalDatabaseName: string,
     *     passwordVersion?: 'CURRENT'|'PREVIOUS'|'PENDING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
