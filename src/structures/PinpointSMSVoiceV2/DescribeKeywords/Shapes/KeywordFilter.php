<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeKeywords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'keyword-action' $Name
 * @property list<string> $Values
 */
class KeywordFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'keyword-action',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
