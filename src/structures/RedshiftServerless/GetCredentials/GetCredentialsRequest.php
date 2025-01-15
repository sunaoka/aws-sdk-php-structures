<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $customDomainName
 * @property string|null $dbName
 * @property int|null $durationSeconds
 * @property string|null $workgroupName
 */
class GetCredentialsRequest extends Request
{
    /**
     * @param array{
     *     customDomainName?: string|null,
     *     dbName?: string|null,
     *     durationSeconds?: int|null,
     *     workgroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
