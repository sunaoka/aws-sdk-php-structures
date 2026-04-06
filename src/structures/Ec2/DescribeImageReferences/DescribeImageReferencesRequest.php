<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ImageIds
 * @property bool|null $IncludeAllResourceTypes
 * @property list<Shapes\ResourceTypeRequest>|null $ResourceTypes
 * @property string|null $NextToken
 * @property bool|null $DryRun
 * @property int<5, max>|null $MaxResults
 */
class DescribeImageReferencesRequest extends Request
{
    /**
     * @param array{
     *     ImageIds: list<string>,
     *     IncludeAllResourceTypes?: bool|null,
     *     ResourceTypes?: list<Shapes\ResourceTypeRequest>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null,
     *     MaxResults?: int<5, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
