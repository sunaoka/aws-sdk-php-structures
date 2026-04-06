<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScanRelatedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceScanId
 * @property list<Shapes\ScannedResourceIdentifier> $Resources
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListResourceScanRelatedResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceScanId: string,
     *     Resources: list<Shapes\ScannedResourceIdentifier>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
