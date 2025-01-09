<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $userIds
 * @property list<string> $groups
 * @property string $kmsKeyId
 */
class EbsSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     userIds?: list<string>,
     *     groups?: list<string>,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
