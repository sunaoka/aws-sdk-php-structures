<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanRelatedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceScanId
 * @property list<Shapes\ScannedResourceIdentifier> $Resources
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListResourceScanRelatedResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceScanId: string,
     *     Resources: list<Shapes\ScannedResourceIdentifier>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
