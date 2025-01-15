<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 * @property 'INDEX'|'DATASOURCE'|null $type
 */
class MemberUser extends Shape
{
    /**
     * @param array{
     *     userId: string,
     *     type?: 'INDEX'|'DATASOURCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
