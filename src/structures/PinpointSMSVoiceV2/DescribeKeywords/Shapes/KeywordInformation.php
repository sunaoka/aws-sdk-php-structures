<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeKeywords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Keyword
 * @property string $KeywordMessage
 * @property 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN' $KeywordAction
 */
class KeywordInformation extends Shape
{
    /**
     * @param array{
     *     Keyword: string,
     *     KeywordMessage: string,
     *     KeywordAction: 'AUTOMATIC_RESPONSE'|'OPT_OUT'|'OPT_IN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
