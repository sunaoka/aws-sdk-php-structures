<?php

namespace Sunaoka\Aws\Structures\Iam\GetServiceLastAccessedDetailsWithEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'USER'|'ROLE'|'GROUP' $Type
 * @property string $Id
 * @property string $Path
 */
class EntityInfo extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Name: string,
     *     Type: 'USER'|'ROLE'|'GROUP',
     *     Id: string,
     *     Path?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
