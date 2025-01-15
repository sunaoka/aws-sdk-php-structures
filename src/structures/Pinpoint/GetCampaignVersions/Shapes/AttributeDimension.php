<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEFORE'|'AFTER'|'BETWEEN'|'ON'|null $AttributeType
 * @property list<string> $Values
 */
class AttributeDimension extends Shape
{
    /**
     * @param array{
     *     AttributeType?: 'INCLUSIVE'|'EXCLUSIVE'|'CONTAINS'|'BEFORE'|'AFTER'|'BETWEEN'|'ON'|null,
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
