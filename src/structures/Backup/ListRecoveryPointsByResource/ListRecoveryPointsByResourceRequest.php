<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property bool|null $ManagedByAWSBackupOnly
 */
class ListRecoveryPointsByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     ManagedByAWSBackupOnly?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
