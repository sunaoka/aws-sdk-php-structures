<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContactId
 * @property bool $IsEssential
 */
class ContactTargetInfo extends Shape
{
    /**
     * @param array{
     *     ContactId?: string,
     *     IsEssential: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
