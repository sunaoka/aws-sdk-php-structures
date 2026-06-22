<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchDeleteInstrumentationConfigurations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $DeletedCount
 * @property list<Shapes\BatchDeleteSuccessfulDeletion> $SuccessfulDeletions
 * @property list<Shapes\BatchDeleteError> $Errors
 */
class BatchDeleteInstrumentationConfigurationsResponse extends Response
{
}
