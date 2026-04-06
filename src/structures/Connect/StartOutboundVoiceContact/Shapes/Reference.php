<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'URL'|'ATTACHMENT'|'NUMBER'|'STRING'|'DATE'|'EMAIL' $Type
 */
class Reference extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Type: 'URL'|'ATTACHMENT'|'NUMBER'|'STRING'|'DATE'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
