<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DetectProfileObjectType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $Target
 * @property 'STRING'|'NUMBER'|'PHONE_NUMBER'|'EMAIL_ADDRESS'|'NAME' $ContentType
 */
class ObjectTypeField extends Shape
{
    /**
     * @param array{
     *     Source?: string,
     *     Target?: string,
     *     ContentType?: 'STRING'|'NUMBER'|'PHONE_NUMBER'|'EMAIL_ADDRESS'|'NAME'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
