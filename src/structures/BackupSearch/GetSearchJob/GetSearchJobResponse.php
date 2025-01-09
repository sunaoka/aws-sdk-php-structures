<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property Shapes\SearchScopeSummary $SearchScopeSummary
 * @property Shapes\CurrentSearchProgress $CurrentSearchProgress
 * @property string $StatusMessage
 * @property string $EncryptionKeyArn
 * @property \Aws\Api\DateTimeResult $CompletionTime
 * @property 'RUNNING'|'COMPLETED'|'STOPPING'|'STOPPED'|'FAILED' $Status
 * @property Shapes\SearchScope $SearchScope
 * @property Shapes\ItemFilters $ItemFilters
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $SearchJobIdentifier
 * @property string $SearchJobArn
 */
class GetSearchJobResponse extends Response
{
}
