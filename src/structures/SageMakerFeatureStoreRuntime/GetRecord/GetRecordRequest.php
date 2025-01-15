<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\GetRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property list<string>|null $FeatureNames
 * @property 'Enabled'|'Disabled'|null $ExpirationTimeResponse
 */
class GetRecordRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     FeatureNames?: list<string>|null,
     *     ExpirationTimeResponse?: 'Enabled'|'Disabled'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
