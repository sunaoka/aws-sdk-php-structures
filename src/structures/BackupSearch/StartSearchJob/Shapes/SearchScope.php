<?php

namespace Sunaoka\Aws\Structures\BackupSearch\StartSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'S3'|'EBS'> $BackupResourceTypes
 * @property BackupCreationTimeFilter|null $BackupResourceCreationTime
 * @property list<string>|null $SourceResourceArns
 * @property list<string>|null $BackupResourceArns
 * @property array<string, string>|null $BackupResourceTags
 */
class SearchScope extends Shape
{
    /**
     * @param array{
     *     BackupResourceTypes: list<'S3'|'EBS'>,
     *     BackupResourceCreationTime?: BackupCreationTimeFilter|null,
     *     SourceResourceArns?: list<string>|null,
     *     BackupResourceArns?: list<string>|null,
     *     BackupResourceTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
