<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARN
 * @property list<Tag>|null $Tags
 * @property ComplianceDetails|null $ComplianceDetails
 */
class ResourceTagMapping extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string|null,
     *     Tags?: list<Tag>|null,
     *     ComplianceDetails?: ComplianceDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
