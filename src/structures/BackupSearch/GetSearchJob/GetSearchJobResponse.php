<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property Shapes\SearchScopeSummary|null $SearchScopeSummary
 * @property Shapes\CurrentSearchProgress|null $CurrentSearchProgress
 * @property string|null $StatusMessage
 * @property string|null $EncryptionKeyArn
 * @property \Aws\Api\DateTimeResult|null $CompletionTime
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
