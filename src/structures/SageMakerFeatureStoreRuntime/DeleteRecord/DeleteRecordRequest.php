<?php

namespace Sunaoka\Aws\Structures\SageMakerFeatureStoreRuntime\DeleteRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FeatureGroupName
 * @property string $RecordIdentifierValueAsString
 * @property string $EventTime
 * @property list<'OnlineStore'|'OfflineStore'> $TargetStores
 * @property 'SoftDelete'|'HardDelete' $DeletionMode
 */
class DeleteRecordRequest extends Request
{
    /**
     * @param array{
     *     FeatureGroupName: string,
     *     RecordIdentifierValueAsString: string,
     *     EventTime: string,
     *     TargetStores?: list<'OnlineStore'|'OfflineStore'>,
     *     DeletionMode?: 'SoftDelete'|'HardDelete'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
