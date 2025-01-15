<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFolderMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MemberId
 * @property 'DASHBOARD'|'ANALYSIS'|'DATASET'|'DATASOURCE'|'TOPIC'|null $MemberType
 */
class FolderMember extends Shape
{
    /**
     * @param array{
     *     MemberId?: string|null,
     *     MemberType?: 'DASHBOARD'|'ANALYSIS'|'DATASET'|'DATASOURCE'|'TOPIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
