<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property 'CSV'|'JSONL'|'ORC' $DataFormat
 * @property string $EncryptionKey
 * @property string $RoleArn
 * @property string $DestinationUri
 */
class CreateSegmentSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     DataFormat: 'CSV'|'JSONL'|'ORC',
     *     EncryptionKey?: string,
     *     RoleArn?: string,
     *     DestinationUri?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
