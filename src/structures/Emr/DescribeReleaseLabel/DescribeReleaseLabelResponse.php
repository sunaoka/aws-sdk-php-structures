<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ReleaseLabel
 * @property list<Shapes\SimplifiedApplication>|null $Applications
 * @property string|null $NextToken
 * @property list<Shapes\OSRelease>|null $AvailableOSReleases
 */
class DescribeReleaseLabelResponse extends Response
{
}
