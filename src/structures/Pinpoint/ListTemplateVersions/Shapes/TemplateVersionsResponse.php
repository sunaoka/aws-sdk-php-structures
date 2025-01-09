<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TemplateVersionResponse> $Item
 * @property string $Message
 * @property string $NextToken
 * @property string $RequestID
 */
class TemplateVersionsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<TemplateVersionResponse>,
     *     Message?: string,
     *     NextToken?: string,
     *     RequestID?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
