<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TemplateVersionResponse> $Item
 * @property string|null $Message
 * @property string|null $NextToken
 * @property string|null $RequestID
 */
class TemplateVersionsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<TemplateVersionResponse>,
     *     Message?: string|null,
     *     NextToken?: string|null,
     *     RequestID?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
