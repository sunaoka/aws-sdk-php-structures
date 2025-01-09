<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $ManagedByAWSBackupOnly
 */
class ListRecoveryPointsByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ManagedByAWSBackupOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
