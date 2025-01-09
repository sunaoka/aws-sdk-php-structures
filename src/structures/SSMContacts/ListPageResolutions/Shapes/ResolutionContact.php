<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageResolutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactArn
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 * @property int<0, 100> $StageIndex
 */
class ResolutionContact extends Shape
{
    /**
     * @param array{
     *     ContactArn: string,
     *     Type: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE',
     *     StageIndex?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
