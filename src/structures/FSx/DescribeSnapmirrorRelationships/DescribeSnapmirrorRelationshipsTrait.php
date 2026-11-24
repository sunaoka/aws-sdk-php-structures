<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeSnapmirrorRelationships;

trait DescribeSnapmirrorRelationshipsTrait
{
    /**
     * @param DescribeSnapmirrorRelationshipsRequest $args
     * @return DescribeSnapmirrorRelationshipsResponse
     */
    public function describeSnapmirrorRelationships(DescribeSnapmirrorRelationshipsRequest $args)
    {
        $result = parent::describeSnapmirrorRelationships($args->toArray());
        return new DescribeSnapmirrorRelationshipsResponse($result->toArray());
    }
}
