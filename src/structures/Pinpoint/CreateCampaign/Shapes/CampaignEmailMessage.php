<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $FromAddress
 * @property list<MessageHeader> $Headers
 * @property string $HtmlBody
 * @property string $Title
 */
class CampaignEmailMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string,
     *     FromAddress?: string,
     *     Headers?: list<MessageHeader>,
     *     HtmlBody?: string,
     *     Title?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
