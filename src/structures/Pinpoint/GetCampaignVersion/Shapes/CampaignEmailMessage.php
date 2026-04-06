<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Body
 * @property string|null $FromAddress
 * @property string|null $HtmlBody
 * @property string|null $Title
 */
class CampaignEmailMessage extends Shape
{
    /**
     * @param array{
     *     Body?: string|null,
     *     FromAddress?: string|null,
     *     HtmlBody?: string|null,
     *     Title?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
