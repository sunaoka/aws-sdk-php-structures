<?php

namespace Sunaoka\Aws\Structures\kendra\PutPrincipalMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string|null $DataSourceId
 */
class MemberGroup extends Shape
{
    /**
     * @param array{
     *     GroupId: string,
     *     DataSourceId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
