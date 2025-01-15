<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ContactId
 * @property bool $IsEssential
 */
class ContactTargetInfo extends Shape
{
    /**
     * @param array{
     *     ContactId?: string|null,
     *     IsEssential: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
