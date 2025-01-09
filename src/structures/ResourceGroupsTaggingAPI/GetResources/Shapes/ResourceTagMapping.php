<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 * @property list<Tag> $Tags
 * @property ComplianceDetails $ComplianceDetails
 */
class ResourceTagMapping extends Shape
{
    /**
     * @param array{
     *     ResourceARN?: string,
     *     Tags?: list<Tag>,
     *     ComplianceDetails?: ComplianceDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
