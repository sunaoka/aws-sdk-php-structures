<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\ListRequiredTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceType
 * @property list<string>|null $CloudFormationResourceTypes
 * @property list<string>|null $ReportingTagKeys
 */
class RequiredTag extends Shape
{
    /**
     * @param array{
     *     ResourceType?: string|null,
     *     CloudFormationResourceTypes?: list<string>|null,
     *     ReportingTagKeys?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
