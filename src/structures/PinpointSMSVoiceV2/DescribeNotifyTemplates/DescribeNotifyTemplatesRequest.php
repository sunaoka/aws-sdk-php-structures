<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeNotifyTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TemplateIds
 * @property list<Shapes\NotifyTemplateFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeNotifyTemplatesRequest extends Request
{
    /**
     * @param array{
     *     TemplateIds?: list<string>|null,
     *     Filters?: list<Shapes\NotifyTemplateFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
