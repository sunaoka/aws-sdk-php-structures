<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchGetRecordResultDetail> $Records
 * @property list<Shapes\BatchGetRecordError> $Errors
 * @property list<Shapes\BatchGetRecordIdentifier> $UnprocessedIdentifiers
 */
class BatchGetRecordResponse extends Response
{
}
