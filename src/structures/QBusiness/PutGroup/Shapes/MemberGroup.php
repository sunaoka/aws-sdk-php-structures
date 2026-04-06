<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupName
 * @property 'INDEX'|'DATASOURCE'|null $type
 */
class MemberGroup extends Shape
{
    /**
     * @param array{
     *     groupName: string,
     *     type?: 'INDEX'|'DATASOURCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
