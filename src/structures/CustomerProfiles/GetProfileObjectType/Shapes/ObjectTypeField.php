<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Source
 * @property string|null $Target
 * @property 'STRING'|'NUMBER'|'PHONE_NUMBER'|'EMAIL_ADDRESS'|'NAME'|null $ContentType
 */
class ObjectTypeField extends Shape
{
    /**
     * @param array{
     *     Source?: string|null,
     *     Target?: string|null,
     *     ContentType?: 'STRING'|'NUMBER'|'PHONE_NUMBER'|'EMAIL_ADDRESS'|'NAME'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
