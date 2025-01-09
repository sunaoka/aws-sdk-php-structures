<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\BatchGetRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetRecordIdentifier> $Identifiers
 * @property 'Enabled'|'Disabled' $ExpirationTimeResponse
 */
class BatchGetRecordRequest extends Request
{
    /**
     * @param array{
     *     Identifiers: list<Shapes\BatchGetRecordIdentifier>,
     *     ExpirationTimeResponse?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
