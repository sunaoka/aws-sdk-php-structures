<?php

namespace Sunaoka\Aws\Structures\QBusiness\PutGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 * @property 'INDEX'|'DATASOURCE' $type
 */
class MemberUser extends Shape
{
    /**
     * @param array{
     *     userId: string,
     *     type?: 'INDEX'|'DATASOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
