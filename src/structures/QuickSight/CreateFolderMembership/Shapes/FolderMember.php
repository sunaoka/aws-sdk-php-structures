<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFolderMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MemberId
 * @property 'DASHBOARD'|'ANALYSIS'|'DATASET'|'DATASOURCE'|'TOPIC' $MemberType
 */
class FolderMember extends Shape
{
    /**
     * @param array{
     *     MemberId?: string,
     *     MemberType?: 'DASHBOARD'|'ANALYSIS'|'DATASET'|'DATASOURCE'|'TOPIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
