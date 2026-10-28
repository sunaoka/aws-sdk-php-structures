<?php

namespace Sunaoka\Aws\Structures\Ec2\GetImageFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class GetImageFindingsRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
