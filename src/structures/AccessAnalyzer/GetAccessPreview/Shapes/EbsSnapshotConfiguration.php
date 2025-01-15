<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAccessPreview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $userIds
 * @property list<string>|null $groups
 * @property string|null $kmsKeyId
 */
class EbsSnapshotConfiguration extends Shape
{
    /**
     * @param array{
     *     userIds?: list<string>|null,
     *     groups?: list<string>|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
