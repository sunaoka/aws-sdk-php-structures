<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeReleaseLabel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ReleaseLabel
 * @property list<Shapes\SimplifiedApplication> $Applications
 * @property string $NextToken
 * @property list<Shapes\OSRelease> $AvailableOSReleases
 */
class DescribeReleaseLabelResponse extends Response
{
}
