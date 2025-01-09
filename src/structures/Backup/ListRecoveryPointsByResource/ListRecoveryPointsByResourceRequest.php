<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property bool $ManagedByAWSBackupOnly
 */
class ListRecoveryPointsByResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     ManagedByAWSBackupOnly?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
