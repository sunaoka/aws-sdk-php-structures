<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactArn
 * @property string $Alias
 * @property string $DisplayName
 * @property 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE' $Type
 */
class Contact extends Shape
{
    /**
     * @param array{
     *     ContactArn: string,
     *     Alias: string,
     *     DisplayName?: string,
     *     Type: 'PERSONAL'|'ESCALATION'|'ONCALL_SCHEDULE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
