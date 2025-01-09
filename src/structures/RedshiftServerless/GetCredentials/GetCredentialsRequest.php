<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $customDomainName
 * @property string $dbName
 * @property int $durationSeconds
 * @property string $workgroupName
 */
class GetCredentialsRequest extends Request
{
    /**
     * @param array{
     *     customDomainName?: string,
     *     dbName?: string,
     *     durationSeconds?: int,
     *     workgroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
