<?php

namespace Sunaoka\Aws\Structures\BackupSearch\GetSearchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'S3'|'EBS'> $BackupResourceTypes
 * @property BackupCreationTimeFilter $BackupResourceCreationTime
 * @property list<string> $SourceResourceArns
 * @property list<string> $BackupResourceArns
 * @property array<string, string> $BackupResourceTags
 */
class SearchScope extends Shape
{
    /**
     * @param array{
     *     BackupResourceTypes: list<'S3'|'EBS'>,
     *     BackupResourceCreationTime?: BackupCreationTimeFilter,
     *     SourceResourceArns?: list<string>,
     *     BackupResourceArns?: list<string>,
     *     BackupResourceTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
