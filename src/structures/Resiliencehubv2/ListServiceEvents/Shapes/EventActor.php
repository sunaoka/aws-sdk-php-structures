<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER'|'SYSTEM' $type
 * @property string $principalId
 * @property string|null $accountId
 * @property string|null $userName
 */
class EventActor extends Shape
{
    /**
     * @param array{
     *     type: 'USER'|'SYSTEM',
     *     principalId: string,
     *     accountId?: string|null,
     *     userName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
