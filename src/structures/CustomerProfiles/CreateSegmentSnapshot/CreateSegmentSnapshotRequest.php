<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateSegmentSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property 'CSV'|'JSONL'|'ORC' $DataFormat
 * @property string|null $EncryptionKey
 * @property string|null $RoleArn
 * @property string|null $DestinationUri
 */
class CreateSegmentSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     DataFormat: 'CSV'|'JSONL'|'ORC',
     *     EncryptionKey?: string|null,
     *     RoleArn?: string|null,
     *     DestinationUri?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
