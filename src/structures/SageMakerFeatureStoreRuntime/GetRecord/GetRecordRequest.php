<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\GetRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property list<string> $FeatureNames
 * @property 'Enabled'|'Disabled' $ExpirationTimeResponse
 */
class GetRecordRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     FeatureNames?: list<string>,
     *     ExpirationTimeResponse?: 'Enabled'|'Disabled'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
